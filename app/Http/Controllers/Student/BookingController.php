<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Controllers\General\GeneralController;
use App\Http\Controllers\General\NotifyController;
use App\Models\Booking;
use App\Models\Classroom;
use App\Models\User;
use App\Models\Activitylogs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\General\Teach;
use App\Models\Admin\tktCat;
use App\Models\Admin\supportTkts;
use App\Models\Admin\Subject;
use App\Models\Payments;
use Illuminate\Support\Facades\URL;
use Session;
use Redirect;
use Input;
use App\Models\subjectPlans;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use Obydul\LaraSkrill\SkrillClient;
use Obydul\LaraSkrill\SkrillRequest;

class BookingController extends Controller
{

    private $_api_context, $skrilRequest;

    public function __construct()
    {

        $paypal_configuration = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_configuration['sandbox']['client_id'], $paypal_configuration['sandbox']['client_secret']));
        $this->_api_context->setConfig($paypal_configuration);

        // Skrill Integeration
        $this->skrilRequest = new SkrillRequest();
        $this->skrilRequest->pay_to_email = 'skrill_user_test2@smart2pay.com';
        $this->skrilRequest->return_url = 'https://webs.dev/student/bookings';
        $this->skrilRequest->logo_url = 'https://tutorvydev.naumanyasin.com/assets/images/logo/logo.png';


    }

    public function index()
    {

        $all = Booking::with(['tutor'])->where('user_id',Auth::user()->id)->get();
        $pending = Booking::with('tutor')->where('user_id',Auth::user()->id)->whereIn('status',[0,1])->get();
        $confirmed = Booking::with('tutor')->where('user_id',Auth::user()->id)->status(2)->get();

        $completed = Booking::with('tutor')->where('user_id',Auth::user()->id)->status(5)->get();
        $cancelled = Booking::with('tutor')->where('user_id',Auth::user()->id)->whereIn('status',[3,4])->get();

        $commission = DB::table("sys_settings")->first();

        return view('student.pages.booking.index',compact('confirmed','pending','completed','cancelled','all','commission'));
    }

    public function bookNow($t_id){

        $subjects = Teach::where('user_id',$t_id)->with('subject_plans')->get();
        $user = User::with(['education','professional','teach'])->where('id',$t_id)->first();
        return view('student.pages.booking.book_now',compact('t_id','subjects','user'));
    }
    public function bookingDetail($id){

        $booking = Booking::with(['tutor','user','subject'])->where('id',$id)->first();
        return view('student.pages.booking.booking_detail',compact('booking'));
    }
    public function bookingNew(Request $request){

        $booking = Booking::with(['tutor','user','subject'])->where('id',$request->id)->first();
        $commission = $commission = DB::table("sys_settings")->first();

        return response()->json([
            'status_code'=>200,
            'success' => true,
            'booking' => $booking,
            'commission' => $commission,
        ]);

    }
    public function directBooking($id)
    {
        $tutor = User::with('teach')->find($id);
       return view('student.pages.booking.booking',compact('tutor'));
    }


    public function booked(Request $request) {
        $attachments = [];
        $path = '';
        if($request->hasFile('upload')){
            $path = 'storage/booking/docs/'.$request->upload->getClientOriginalName();
            $request->upload->storeAs('booking/docs',$request->upload->getClientOriginalName(),'public');
        }

        $tutor = User::where('id',$request->tutor_id)->first();
        $price = $request->subject_plan * $request->duration;

        $booking = Booking::create([
            'user_id' => Auth::user()->id,
            'booked_tutor' => $request->tutor_id,
            'subject_id' =>$request->subject,
            'topic' => $request->topic,
            'question' => $request->question,
            'brief' => $request->brief,
            'attachments' => $path,
            'class_date' => $request->date,
            'class_time' => $request->time,
            'duration' => $request->duration,
            'price' => $price,

        ]);

        $subject = Subject::where("id",$request->subject)->first();

        // activity logs
        $id = Auth::user()->id;
        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
        $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> request for book a class of '.$subject->name ;
        $activity_logs = new GeneralController();
        $activity_logs->save_activity_logs("Class Booking", "bookings.id", $booking->id, $action_perform, $request->header('User-Agent'), $id);
        $reciever_ids = [];

        $reciever = User::where('role',1)->first();

        $notification = new NotifyController();
        $slug = URL::to('/') . '/tutor/booking-detail/'. $booking->id  ;
        $type = 'class_booking';
        $title = 'Class Booking Request';
        $icon = 'fas fa-tag';
        $class = 'btn-success';
        $desc = $name . ' request for book a class of '.$subject->name;
        $pic = Auth::user()->picture;

        // tutor notification
        $notification->GeneralNotifi($request->tutor_id ,$slug,$type,$title,$icon,$class,$desc,$pic);

        // admin notification
        $notification->GeneralNotifi($reciever->id ,$slug,$type,$title,$icon,$class,$desc,$pic);


        return response()->json([
            'status'=>200,
            'message' => 'success'
        ]);
    }


    public function bookingPayment(Request $request,$id){


        $total_price = 0;
        $booking = Booking::where('id',$request->id)->first();
        $commission = DB::table("sys_settings")->first();

        if($commission) {
            $comm = ($booking->price * $commission->commission) / 100;
            $total_price = $booking->price + $comm;
        }else{
            $total_price = $booking->price;
        }

        if(!$booking){
            \Session::put('error','Unable to process booking not available.');
            return Redirect::route('student.bookings');
        }
        if($total_price == null || $total_price == 0.00 || $total_price == 0){
            \Session::put('error','Unable to process booking with invalid amount.');
            return Redirect::route('student.bookings');
        }

        if($request->paymentMethod == 1){
            //Payment Through Paypal
            $this->skrilRequest->transaction_id = 'SKRL-'.rand();
            $this->skrilRequest->amount = $total_price;
            $this->skrilRequest->currency = 'USD';
            $this->skrilRequest->language = 'EN';
            $this->skrilRequest->prepare_only = '1';
            $this->skrilRequest->merchant_fields = 'Tutorvy,'.Auth::user()->email;
            $this->skrilRequest->site_name = 'Tutorvy.com';
            $this->skrilRequest->customer_email = Auth::user()->email;
            $this->skrilRequest->detail1_description = 'Booking ID:';
            $this->skrilRequest->detail1_text = $booking->id;
            $this->skrilRequest->detail2_description = 'Tutor Fee:';
            $this->skrilRequest->detail2_text = '$'.$booking->price;
            $this->skrilRequest->detail3_description = 'Service Fee:'.$commission->commission.'%';
            $this->skrilRequest->detail3_text = '$'.$comm;

            // create object instance of SkrillClient
            $client = new SkrillClient($this->skrilRequest);
            $sid = $client->generateSID(); //return SESSION ID

            // handle error
            $jsonSID = json_decode($sid);
            if ($jsonSID != null && $jsonSID->code == "BAD_REQUEST")
                return $jsonSID->message;
            // do the payment
            $redirectUrl = $client->paymentRedirectUrl($sid); //return redirect url

            $booking->status = 2;
            $booking->save();

            Payments::create([
                'booking_id' => $booking->id,
                'transaction_id' =>  $this->skrilRequest->transaction_id,
                'amount'  => $total_price,
                'method'  => 'skrill'
            ]);

            return \Redirect::to($redirectUrl);

        }else{
            //Payment Through Paypal
            $payer = new Payer();
            $payer->setPaymentMethod('paypal');

            $item_1 = new Item();

            $item_1->setName('Online Class')
                ->setCurrency('USD')
                ->setQuantity(1)
                ->setPrice($total_price);

            $item_list = new ItemList();
            $item_list->setItems(array($item_1));

            $amount = new Amount();
            $amount->setCurrency('USD')
                ->setTotal($total_price);

            $transaction = new Transaction();
            $transaction->setAmount($amount)
                ->setItemList($item_list)
                ->setDescription('Enter Your transaction description');

            $redirect_urls = new RedirectUrls();
            $redirect_urls->setReturnUrl(URL::route('student.paymentstatus'))
                ->setCancelUrl(URL::route('student.paymentstatus'));

            $payment = new Payment();
            $payment->setIntent('Sale')
                ->setPayer($payer)
                ->setRedirectUrls($redirect_urls)
                ->setTransactions(array($transaction));
            try {
                $payment->create($this->_api_context);
            } catch (\PayPal\Exception\PPConnectionException $ex) {
                if (\Config::get('app.debug')) {
                    \Session::put('error','Connection timeout');
                    return Redirect::route('student.bookings');
                } else {
                    \Session::put('error','Some error occur, sorry for inconvenient');
                    return Redirect::route('student.bookings');
                }
            }

            foreach($payment->getLinks() as $link) {
                if($link->getRel() == 'approval_url') {
                    $redirect_url = $link->getHref();
                    break;
                }
            }
            Session::put('booking_id', $booking->id);

            Session::put('payment_id', $payment->getId());

            if(isset($redirect_url)) {
                return Redirect::away($redirect_url);
            }
            \Session::put('error','Unknown error occurred');

        }
        // Session::put('booking_id', $booking->id);


    	return Redirect::route('student.bookings');

    }

    public function getPaymentStatus(Request $request)
    {
        $payment_id = Session::get('payment_id');
        $booking_id = Session::get('booking_id');

        Session::forget('payment_id');
        if (empty($request->input('PayerID')) || empty($request->input('token'))) {
            \Session::put('error','Payment failed');
            return Redirect::route('student.bookings');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));
        $result = $payment->execute($execution, $this->_api_context);


        if ($result->getState() == 'approved') {
            \Session::put('success','Payment success');

            $classroom_id = sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
                mt_rand( 0, 0xffff ),
                mt_rand( 0, 0x0C2f ) | 0x4000,
                mt_rand( 0, 0x3fff ) | 0x8000,
                mt_rand( 0, 0x2Aff ), mt_rand( 0, 0xffD3 ), mt_rand( 0, 0xff4B )
            );
            // return $red;
            $booking = Booking::where('id',$booking_id)->first();
            $subject = Subject::where('id',$booking->subject_id)->first();

            Payments::create([
                'booking_id' => $booking->id,
                'transaction_id' => $result->id,
                'amount'  => $result->transactions[0]->amount->total,
                'method'  => 'paypal'
            ]);

            Classroom::create([
                'booking_id' => $booking_id,
                'classroom_id' => $classroom_id
            ]);
            $booking->status = 2;
            $booking->save();

            $id = Auth::user()->id;
            $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
            $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> Payment success';
            $activity_logs = new GeneralController();
            $activity_logs->save_activity_logs("Payment Success", "users.id", $id, $action_perform, $request->header('User-Agent'), $id);

            $admin = User::where('role',1)->first();

            $notification = new NotifyController();
            $slug = URL::to('/') . '/tutor/booking-detail/' . $booking->id;
            $type = 'booking_confirmed';
            $title = 'Booking Confirmed';
            $icon = 'fas fa-tag';
            $class = 'btn-success';
            $desc = $name . ' Paid for Class of ' . $subject->name;
            $pic = Auth::User()->picture;
            $notification->GeneralNotifi($booking->booked_tutor ,$slug,$type,$title,$icon,$class,$desc,$pic);

            // send to admin
            $admin_slug = URL::to('/') . '/admin/booking-detail/' . $booking->id;
            $notification->GeneralNotifi($admin->id,$admin_slug,$type,$title,$icon,$class,$desc,$pic);



            return Redirect::route('student.bookings');
        }
        \Session::put('error','Payment failed !!');
		return Redirect::route('student.bookings');
    }


    public function history()
    {
        $tickets = supportTkts::where('user_id',Auth::user()->id)->with(['category','tkt_created_by'])->get();

        return view('student.pages.history.index',compact('tickets'));
    }


    public function tutorPlans(Request $request) {
        $plans = subjectPlans::where("user_id", $request->user_id)->where("subject_id",$request->subject_id)->get();

        return response()->json([
            "tutor_plans" => $plans,
            "status_code" => 200,
            "success" => true,
        ]);
    }
}

