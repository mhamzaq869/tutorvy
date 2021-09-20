<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Classroom;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\General\Teach;
use App\Models\Admin\tktCat;
use App\Models\Admin\supportTkts;
use URL;
use Session;
use Redirect;
use Input;

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

class BookingController extends Controller
{

    private $_api_context;
    
    public function __construct()
    {
            
        $paypal_configuration = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_configuration['sandbox']['client_id'], $paypal_configuration['sandbox']['client_secret']));
        $this->_api_context->setConfig($paypal_configuration);
        
    }
    
    public function index()
    {
        
        $today = Booking::with(['tutor'])->where('user_id',Auth::user()->id)->today()->status(0)->get();
        $upcoming = Booking::with('tutor')->where('user_id',Auth::user()->id)->status(2)->get();
        $pending = Booking::with('tutor')->where('user_id',Auth::user()->id)->status(1)->get();
        $delivered = Booking::with('tutor')->where('user_id',Auth::user()->id)->status(5)->get();
        $booking = Booking::where('user_id',Auth::user()->id)->first();
        // return $pending;
        return view('student.pages.booking.index',compact('today','upcoming','pending','delivered','booking'));
    }

    public function bookNow($t_id){

        $subjects = Teach::where('user_id',$t_id)->get();
        $user = User::with(['education','professional','teach'])->where('id',$t_id)->first();
         return view('student.pages.booking.book_now',compact('t_id','subjects','user'));
    }
    public function bookingDetail($id){

        $booking = Booking::with(['tutor','user','subject'])->where('id',$id)->first();
        return view('student.pages.booking.booking_detail',compact('booking'));
    }
    public function directBooking($id)
    {
        $tutor = User::with('teach')->find($id);
       return view('student.pages.booking.booking',compact('tutor'));
    }


    public function booked(Request $request)
    {
        $attachments = [];
        $path = '';
        if($request->hasFile('upload')){
            // foreach($request->upload as $i => $upload){
                $path = 'storage/booking/docs/'.$request->upload->getClientOriginalName();
                $request->upload->storeAs('booking/docs',$request->upload->getClientOriginalName(),'public');
                // array_push($attachments,$path);
            // }
        }

        $tutor = User::where('id',$request->tutor_id)->first();
        $price = $tutor->hourly_rate * $request->duration;

        Booking::create([

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

        return response()->json([
            'status'=>200,
            'message' => 'success'
        ]);
    }

   
    public function bookingPayment(Request $request,$id){

        $booking = Booking::where('id',$request->id)->first();
        if(!$booking){
            \Session::put('error','Unable to process booking not available.');
            return Redirect::route('student.bookings'); 
        }
        if($booking->price == null || $booking->price == 0.00){
            \Session::put('error','Unable to process booking with invalid amount.');
            return Redirect::route('student.bookings'); 
        }
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

    	$item_1 = new Item();

        $item_1->setName('Online Class')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($booking->price);

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($booking->price);

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
        
        Session::put('paypal_payment_id', $payment->getId());
        Session::put('booking_id', $booking->id);
        
        if(isset($redirect_url)) {            
            return Redirect::away($redirect_url);
        }

        \Session::put('error','Unknown error occurred');
    	return Redirect::route('student.bookings');

    }

    public function getPaymentStatus(Request $request)
    {        
        $payment_id = Session::get('paypal_payment_id');
        $booking_id = Session::get('booking_id');


        Session::forget('paypal_payment_id');
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
            Classroom::create([
                'booking_id' => $booking_id,
                'classroom_id' => $classroom_id
            ]);
            $booking->status = 2;
            $booking->save();

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
 
}

