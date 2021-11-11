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
use App\Models\Course;
use App\Models\CourseEnrollment;
use App\Models\Payments;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;
use Redirect;
use Input;
use App\Models\subjectPlans;
use Illuminate\Contracts\Session\Session as SessionSession;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\PayerInfo;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Refund;
use PayPal\Api\RefundRequest;
use PayPal\Api\Sale;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use Obydul\LaraSkrill\SkrillClient;
use Obydul\LaraSkrill\SkrillRequest;
use App\Models\Wallet;
class BookingController extends Controller
{

    private $_api_context, $skrilRequest,$pay_from_email;

    public function __construct()
    {

        $paypal_configuration = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_configuration['sandbox']['client_id'], $paypal_configuration['sandbox']['client_secret']));
        $this->_api_context->setConfig($paypal_configuration);


    }

    public function index()
    {

        $all = Booking::with(['tutor'])->where('user_id',Auth::user()->id)->get();
        $pending = Booking::with('tutor')->where('user_id',Auth::user()->id)->whereIn('status',[0,1])->get();
        $confirmed = Booking::with('tutor')->where('user_id',Auth::user()->id)->status(2)->get();

        $completed = Booking::with('tutor')->where('user_id',Auth::user()->id)->status(5)->get();
        $cancelled = Booking::with('tutor')->where('user_id',Auth::user()->id)->whereIn('status',[3,4])->get();

        $commission = DB::table("sys_settings")->first();
        $defaultPay = DB::table('payment_methods')->where('user_id',Auth::user()->id)->where('default',1)->first();

        return view('student.pages.booking.index',compact('confirmed','pending','completed','cancelled','all','commission','defaultPay'));
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

    public function booked(Request $request)
    {
        $class_date = $request->date;
        $class_time = $request->time;


        $from_time = date("H:i", strtotime("$class_time"));
        $to_time = date("H:i", strtotime("$from_time"."+".$request->duration."hours"));

        DB::enableQueryLog();
        $booking = DB::select("select * from `bookings` where booked_tutor = ? && class_date = ? && class_time BETWEEN ? AND ? && `class_booked_till` BETWEEN ? AND ?", [
            $request->tutor_id,
            $class_date,
            $from_time,
            $to_time,
            $from_time,
            $to_time
        ]);
        // dd(DB::getQueryLog());
        $bookings = collect($booking);

        if($bookings->count() <= 0){

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
                'class_booked_till' => $to_time,
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


            // timezone
            if($request->current_date != null && $request->current_date != "") {

                $booking_region =  substr($request->current_date ,25,50);

                if(Auth::user()->region != null && Auth::user()->region != "") {

                    if(Auth::user()->region != $booking_region) {
                        User::where('id', Auth::user()->id)->update([
                            "region" => $booking_region,
                        ]);
                    }

                }else{

                    User::where('id', Auth::user()->id)->update([
                        "region" => $booking_region,
                    ]);

                }

            }

            return response()->json([
                'status'=>200,
                'type' => 'success',
                'message' => 'Booking Added Successfully!'
            ]);

        }else{
            return response()->json([
                'status'=>400,
                'type' => 'error',
                'message' => 'Class is already booked between '.date("h:i A",strtotime($bookings->min('class_time'))).' to '.date("h:i A",strtotime($bookings->max('class_booked_till')))
            ]);
        }
    }

    public function bookingPayment(Request $request,$id)
    {
        $total_price = 0;
        $booking = Booking::where('id',$request->id)->first();
        $commission = DB::table("sys_settings")->first();

        if($commission) {
            $comm = ($booking->price * $commission->commission) / 100;
            $total_price = $booking->price + $comm;
        }else{
            $total_price = $booking->price;
            $comm = 0;
        }

        Session::put('service_fee',$comm);

        if(!$booking){
            Session::flash('error','Unable to process booking not available.');
            return redirect()->route('student.bookings');
        }
        if($total_price == null || $total_price == 0.00 || $total_price == 0){
            Session::flash('error','Unable to process booking with invalid amount.');
            return redirect()->route('student.bookings');
        }

        //skrill payment method
        if($request->paymentMethod == 'skrill'){
            $redirectUrl = $this->skrillPayment($total_price,$commission,$comm,$booking,$request->id);
            return redirect()->to($redirectUrl);

        }elseif($request->paymentMethod == 'wallet'){

            $walletIn  = Wallet::where('user_id',Auth::user()->id)->where('type','in')->sum('amount');
            $walletOut = Wallet::where('user_id',Auth::user()->id)->where('type','out')->sum('amount');
            $balance   = $walletIn-$walletOut;

            if($balance >= $total_price){

                $booking_id = Session::get('bookingId');
                $booking = Booking::where('id',$booking_id)->first();

                $classroom_id = sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                    mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
                    mt_rand( 0, 0xffff ),
                    mt_rand( 0, 0x0C2f ) | 0x4000,
                    mt_rand( 0, 0x3fff ) | 0x8000,
                    mt_rand( 0, 0x2Aff ), mt_rand( 0, 0xffD3 ), mt_rand( 0, 0xff4B )
                );

                $subject = Subject::where('id',$booking->subject_id)->first();
                $booking->status = 2;
                $booking->service_fee =  Session::get('service_fee');
                $booking->save();

                Classroom::create([
                    'booking_id' => $booking_id,
                    'classroom_id' => $classroom_id
                ]);

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


                $transaction_id = Session::get('transaction_id');
                $total_price = Session::get('amount');

                Payments::create([
                    'user_id' => Auth::user()->id,
                    'type_id' => $booking->id,
                    'type' => 'Booked Class',
                    'transaction_id' =>  $transaction_id,
                    'amount'  => $total_price,
                    'service_fee'  => Session::get('service_fee'),
                    'method'  => 'wallet'
                ]);

                Wallet::create([
                    'user_id' => Auth::user()->id,
                    'amount' => $total_price,
                    'type' => 'out',
                ]);

            }
            Session::flash('error','You have insufficient balance');
            return redirect()->back();
        }else{
            //Payment Through Paypal
            $redirect_url = $this->paypalPayment($total_price,$booking,'booking');

            if(isset($redirect_url)) {
                return redirect()->away($redirect_url);
            }

            Session::flash('error','Unknown error occurred');

        }

    	return redirect()->route('student.bookings');

    }

    public function cancelBooking(Request $request,$id)
    {
        $booking = Booking::find($id);

        $refund_amount = $booking->price;
        $saleId = Payments::where('type_id',$booking->id)->first()->sale_id ?? '';

        if($saleId){
                $paymentValue =  (string) round($refund_amount,2); ;

                // ### Refund amount
                // Includes both the refunded amount (to Payer)
                // and refunded fee (to Payee). Use the $amt->details
                // field to mention fees refund details.
                $amt = new Amount();
                $amt->setCurrency('USD')
                    ->setTotal($paymentValue);

                // ### Refund object
                $refundRequest = new RefundRequest();
                $refundRequest->setAmount($amt);

                // ###Sale
                // A sale transaction.
                // Create a Sale object with the
                // given sale transaction id.
                $sale = new Sale();
                $sale->setId($saleId);
                try {
                    $refundedSale = $sale->refundSale($refundRequest, $this->_api_context);
                } catch (\Exception $ex) {
                    dd($ex);
                    exit(1);
                }

                if($refundedSale->state == 'completed'){

                    Payments::create([
                        'user_id' => Auth::user()->id,
                        'type' => 'payment_refund',
                        'transaction_id' => $booking->payment->first()->transaction_id,
                        'sale_id' => $refundedSale->sale_id ?? '',
                        'amount'  => $refundedSale->amount->total,
                        'method'  => 'paypal'
                    ]);

                    $booking->status = 4;
                    $booking->save();
                }
                    return redirect()->route('student.bookings')->with('success', '$'.$refundedSale->amount->total.' amount has been refunded to your account successfully!');

        }else{

            $booking->status = 4;
            $booking->save();

        return redirect()->route('student.bookings')->with('success', 'Booking has been successfully!');
        }

    }

    public function coursePayment(Request $request,$id)
    {
        $course = Course::where('id',$id)->first();
        $commission = DB::table("sys_settings")->first();
        $tutor_fee = $request->amount - $request->comm ;
        $course->price = $tutor_fee;

        Session::put('service_fee',$request->comm);

        if($course->seats != 0){

            if($request->paymentMethod == 'skrill'){
                Session::put('plan',$request->plan);
                $redirectUrl = $this->skrillPayment($request->amount,$commission,$request->comm,$course,$id);
                return redirect()->to($redirectUrl);

            }elseif($request->paymentMethod == 'wallet'){

                $walletIn  = Wallet::where('user_id',Auth::user()->id)->where('type','in')->sum('amount');
                $walletOut = Wallet::where('user_id',Auth::user()->id)->where('type','out')->sum('amount');
                $balance   = $walletIn-$walletOut;

                if($balance >= $request->amount){

                    $course = Course::where('id',$id)->first();

                    $course->seats = $course->seats - 1;
                    $course->save();

                    CourseEnrollment::create([
                        'user_id' => Auth::user()->id,
                        'course_id' => $course->id,
                        'plan' => $request->plan,
                        'price' => $request->amount,
                        'service_fee' => $request->comm,
                        'status' => 1
                    ]);


                    $classroom_id = sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
                        mt_rand( 0, 0xffff ),
                        mt_rand( 0, 0x0C2f ) | 0x4000,
                        mt_rand( 0, 0x3fff ) | 0x8000,
                        mt_rand( 0, 0x2Aff ), mt_rand( 0, 0xffD3 ), mt_rand( 0, 0xff4B )
                    );

                    Classroom::create([
                        'course_id' => $course->id ?? null,
                        'classroom_id' => $classroom_id
                    ]);

                    $id = Auth::user()->id;
                    $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
                    $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> Payment success';
                    $activity_logs = new GeneralController();
                    $activity_logs->save_activity_logs("Payment Success", "users.id", $id, $action_perform, $request->header('User-Agent'), $id);

                    $admin = User::where('role',1)->first();


                    $notification = new NotifyController();
                    $slug = URL::to('/') . '/tutor/course-detail/' . $course->id;
                    $type = 'course_enrlled';
                    $title = 'Course Enrolled';
                    $icon = 'fas fa-tag';
                    $class = 'btn-success';
                    $desc = $name.' Paid for Course of '. $course->title;
                    $pic = Auth::User()->picture;
                    $notification->GeneralNotifi($course->booked_tutor ,$slug,$type,$title,$icon,$class,$desc,$pic);

                    // send to admin
                    $admin_slug = URL::to('/') . '/admin/course-detail/' . $course->id;
                    $notification->GeneralNotifi($admin->id,$admin_slug,$type,$title,$icon,$class,$desc,$pic);

                    $transaction_id = Session::get('transaction_id');

                    Payments::create([
                        'user_id' => Auth::User()->id,
                        'type_id' =>  $course->id,
                        'type' => 'course_enrollment',
                        'transaction_id' =>  $transaction_id,
                        'amount'  => $request->amount,
                        'service_fee'  => Session::get('service_fee'),
                        'method'  => 'skrill'
                    ]);

                    Wallet::create([
                        'user_id' => Auth::user()->id,
                        'amount' => $request->amount,
                        'type' => 'out',
                    ]);

                }
                Session::flash('error','You have sufficient balance');
                return redirect()->back();
            }else{
                //Payment Through Paypal
                Session::put('plan',$request->plan);
                $redirect_url = $this->paypalPayment($request->amount,$course,'course');
                if(isset($redirect_url)) {
                    return redirect()->away($redirect_url);
                }

                Session::flash('error','Unknown error occurred');

            }


            return redirect()->route('student.course');
        }elseif($course->seats == 0){
            Session::flash('error','Course Seats are filled, We are unabled to process course enrollment');
            return redirect()->back();
        }
        else{
            Session::flash('error','Unable to process booking with invalid amount.');
            return redirect()->back();
        }

        // dd($booking,$commission,$request->comm,$total_price);



    }

    private function paypalPayment($total_price,$booking,$type)
    {
            $payerEmail = DB::table('payment_methods')
                                ->where('user_id',Auth::user()->id)
                                ->where('method','paypal')
                                ->first();

            $payer = new Payer();
            $payer->setPaymentMethod('paypal');

            if(isset($payerEmail)):
                $payerInfo = new PayerInfo();
                $payerInfo->setEmail($payerEmail->email);
                $payer->setPayerInfo($payerInfo);
            endif;

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
                    Session::flash('error','Connection timeout');
                    return redirect()->route('student.bookings');
                } else {
                    Session::flash('error','Some error occur, sorry for inconvenient');
                    return redirect()->route('student.bookings');
                }
            }

            foreach($payment->getLinks() as $link) {
                if($link->getRel() == 'approval_url') {
                    $redirect_url = $link->getHref();
                    break;
                }
            }
            Session::put('booking_id', $booking->id);
            Session::put('booking_type', $type);
            Session::put('payment_id', $payment->getId());

            return $redirect_url;
    }

    public function getPaymentStatus(Request $request)
    {
        $payment_id = Session::get('payment_id');
        $booking_type = Session::get('booking_type');
        $booking_id = Session::get('booking_id');

        Session::forget('payment_id');
        if (empty($request->input('PayerID')) || empty($request->input('token'))) {
            \Session::flash('error','Payment failed');
            return Redirect::route('student.bookings');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {
            Session::flash('success','Payment success');

            $classroom_id = sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
                mt_rand( 0, 0xffff ),
                mt_rand( 0, 0x0C2f ) | 0x4000,
                mt_rand( 0, 0x3fff ) | 0x8000,
                mt_rand( 0, 0x2Aff ), mt_rand( 0, 0xffD3 ), mt_rand( 0, 0xff4B )
            );
            // return $red;
            $booking = null;

            if($booking_type == 'booking'):
                $booking = Booking::where('id',$booking_id)->first();
            elseif($booking_type == 'course'):

                $course = Course::where('id',$booking_id)->first();
            endif;

            if($booking != null){
                $subject = Subject::where('id',$booking->subject_id)->first();
                $booking->status = 2;
                $booking->service_fee =  Session::get('service_fee');
                $booking->save();
            }else{

                CourseEnrollment::create([
                    'user_id' => Auth::user()->id,
                    'course_id' => $course->id,
                    'plan' => Session::get('plan'),
                    'price' => $result->transactions[0]->amount->total,
                    'service_fee' => Session::get('service_fee'),
                    'status' => 1
                ]);

                $course->status = 1;
                $course->seats = $course->seats - 1;
                $course->save();
            }

            Payments::create([
                'user_id' => Auth::user()->id,
                'type_id' => ($booking != null) ? $booking->id : $course->id,
                'type' => ($booking != null) ? 'booking_class' : 'course_enrollment',
                'transaction_id' => $result->id,
                'sale_id' => $result->transactions[0]->related_resources[0]->sale->id ?? '',
                'amount'  => $result->transactions[0]->amount->total,
                'service_fee' => Session::get('service_fee'),
                'method'  => 'paypal'
            ]);

            Classroom::create([
                'booking_id' => $booking->id ?? null,
                'course_id' => $course->id ?? null,
                'classroom_id' => $classroom_id
            ]);


            $id = Auth::user()->id;
            $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
            $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> Payment success';
            $activity_logs = new GeneralController();
            $activity_logs->save_activity_logs("Payment Success", "users.id", $id, $action_perform, \Request::header('User-Agent'), $id);

            $admin = User::where('role',1)->first();

            $notification = new NotifyController();
            $slug = ($booking != null) ? URL::to('/') . '/tutor/booking-detail/' . $booking->id : URL::to('/') . '/tutor/course-detail/' . $course->id;
            $type = ($booking != null) ? 'booking_confirmed' : 'course_enrlled';
            $title = ($booking != null) ? 'Booking Confirmed' : 'Course Enrolled';
            $icon = 'fas fa-tag';
            $class = 'btn-success';
            $desc = ($booking != null) ? $name . ' Paid for Class of ' . $subject->name : $name.' Paid for Course of '. $course->title;
            $pic = Auth::User()->picture;
            $notification->GeneralNotifi($booking->booked_tutor ?? $course->user_id,$slug,$type,$title,$icon,$class,$desc,$pic);

            // send to admin
            $admin_slug = ($booking != null) ? URL::to('/') . '/admin/booking-detail/' . $booking->id : URL::to('/') . '/tutor/course-detail/' . $course->id;
            $notification->GeneralNotifi($admin->id,$admin_slug,$type,$title,$icon,$class,$desc,$pic);


            return redirect()->route('student.bookings');
        }
        Session::put('error','Payment failed !!');
		return redirect()->route('student.bookings');
    }

    public function skrillPaymentComplete()
    {
        $transaction_id = Session::get('transaction_id');
        $total_price = Session::get('amount');

        $booking_id = Session::get('bookingId');
        $booking_type = Session::get('booking_type');

        $booking = null;

        if($booking_type == 'booking'):
            $booking = Booking::where('id',$booking_id)->first();
        elseif($booking_type == 'course'):
            $course = Course::where('id',$booking_id)->first();
        endif;

        if($booking != null){
            $subject = Subject::where('id',$booking->subject_id)->first();
            $booking->status = 2;
            $booking->service_fee =  Session::get('service_fee');
            $booking->save();
        }else{
            CourseEnrollment::create([
                'user_id' => Auth::user()->id,
                'course_id' => $course->id,
                'plan' => Session::get('plan'),
                'price' => $total_price,
                'service_fee' => Session::get('service_fee'),
                'status' => 1
            ]);

            $course->status = 1;
            $course->seats = $course->seats - 1;
            $course->save();
        }


        $classroom_id = sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
            mt_rand( 0, 0xffff ),
            mt_rand( 0, 0x0C2f ) | 0x4000,
            mt_rand( 0, 0x3fff ) | 0x8000,
            mt_rand( 0, 0x2Aff ), mt_rand( 0, 0xffD3 ), mt_rand( 0, 0xff4B )
        );

        Classroom::create([
            'booking_id' => $booking->id ?? null,
            'course_id' => $course->id ?? null,
            'classroom_id' => $classroom_id
        ]);

        $id = Auth::user()->id;
        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
        $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> Payment success';
        $activity_logs = new GeneralController();
        $activity_logs->save_activity_logs("Payment Success", "users.id", $id, $action_perform, \Request::header('User-Agent'), $id);

        $admin = User::where('role',1)->first();

        $notification = new NotifyController();
        $slug = ($booking != null) ? URL::to('/') . '/tutor/booking-detail/' . $booking->id : URL::to('/') . '/tutor/course-detail/' . $course->id;
        $type = ($booking != null) ? 'booking_confirmed' : 'course_enrlled';
        $title = ($booking != null) ? 'Booking Confirmed' : 'Course Enrolled';
        $icon = 'fas fa-tag';
        $class = 'btn-success';
        $desc = ($booking != null) ? $name . ' Paid for Class of ' . $subject->name : $name.' Paid for Course of '. $course->title;
        $pic = Auth::User()->picture;
        $notification->GeneralNotifi($booking->booked_tutor ?? $course->user_id,$slug,$type,$title,$icon,$class,$desc,$pic);

        // send to admin
        $admin_slug = ($booking != null) ? URL::to('/') . '/admin/booking-detail/' . $booking->id : URL::to('/') . '/tutor/course-detail/' . $course->id;
        $notification->GeneralNotifi($admin->id,$admin_slug,$type,$title,$icon,$class,$desc,$pic);


        Payments::create([
            'user_id' => Auth::User()->id,
            'type_id' => ($booking != null) ? $booking->id : $course->id,
            'type' => ($booking != null) ? 'booking_class' : 'course_enrollment',
            'transaction_id' =>  $transaction_id,
            'amount'  => $total_price,
            'service_fee'  => Session::get('service_fee'),
            'method'  => 'skrill'
        ]);

        return redirect()->route('student.bookings');
    }
 /**
     *  @param $total_price,$commission,$comm.$booking,$bookingID
     *  @return $redirectURL
     *
     *  Skrill Payment Method Integeration and redirect
     */
    private function skrillPayment($total_price,$commission,$comm,$booking,$bkid)
    {

        $payerEmail = DB::table('payment_methods')
        ->where('user_id',Auth::user()->id)
        ->where('method','skrill')
        ->first();

        $this->skrilRequest = new SkrillRequest();
        $this->skrilRequest->pay_to_email = 'skrill_user_test2@smart2pay.com';
        $this->skrilRequest->return_url =  request()->getHost().'student/skrlpayment-complete';
        $this->skrilRequest->cancel_url =  request()->getHost().'student/bookings';
        $this->skrilRequest->logo_url = 'https://tutorvydev.naumanyasin.com/assets/images/logo/logo.png';
        $this->skrilRequest->pay_from_email = $payerEmail->email ?? '';
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
        $this->skrilRequest->detail2_text = '$'.$booking->price ?? $booking;
        $this->skrilRequest->detail3_description = 'Service Fee:'.$commission->commission.'%';
        $this->skrilRequest->detail3_text = '$'.$comm;

        Session::put('bookingId',$bkid);
        Session::put('transaction_id',$this->skrilRequest->transaction_id);
        Session::put('amount',$total_price);

        // create object instance of SkrillClient
        $client = new SkrillClient($this->skrilRequest);
        $sid = $client->generateSID(); //return SESSION ID

        // handle error
        $jsonSID = json_decode($sid);

        if ($jsonSID != null && $jsonSID->code == "BAD_REQUEST")
        return $jsonSID->message;
        // do the payment
        $redirectUrl= $client->paymentRedirectUrl($sid); //return redirect url

        return $redirectUrl;
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

    public function rescheduleBooking(Request $request,$id){

        $booking = Booking::find($id);

        $booking->class_date = $request->date;
        $booking->class_time = $request->time;
        $booking->reschedule_note = $request->note;
        $booking->save();

        \Session::flash('success','You have successfully reschedule this booking');

        return redirect()->back();
    }

    public function checkDefaultPaymentMethod()
    {
        $defaultPay = DB::table('payment_methods')->where('user_id',Auth::user()->id)->where('default',1)->first();

        if(!$defaultPay):
            return response()->json(['success' => "You haven't select or add any default payment method yet, Please select by following this <a href='/student/settings'>Add Payment Method</a>"]);
        endif;
    }



}

