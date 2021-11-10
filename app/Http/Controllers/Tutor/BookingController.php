<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Http\Controllers\General\GeneralController;
use App\Http\Controllers\General\NotifyController;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Activitylogs;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
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
use App\Models\Payments;
use DateTime;
use DateTimeZone;

class BookingController extends Controller
{

    private $_api_context, $skrilRequest,$pay_from_email;

    public function __construct()
    {

        $paypal_configuration = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_configuration['sandbox']['client_id'], $paypal_configuration['sandbox']['client_secret']));
        $this->_api_context->setConfig($paypal_configuration);


    }

    /**
     *  Return Tutor Booking view
     */

    public function index() {
        $all = Booking::with(['user','tutor'])->where('booked_tutor',Auth::user()->id)->get();

        // dd($all->toArray());

        foreach($all as $all_booking) {
            if($all_booking->tutor != null && $all_booking->tutor->time_zone != null) {
                date_default_timezone_set($all_booking->tutor->time_zone);
                $date = date("h:i:sa");
                $all_booking->actual_booking_time =  date("H:i", strtotime($date));
            }
        }

        // dd($all->toArray());

        // $booking_class_time = $all[0]->class_time . ':00';
        // // dd($all->toArray());

        // // tutor
        // $date = date_create($all[0]->class_date, timezone_open($all[0]->tutor->time_zone));
        // echo date_format($date, 'Y-m-d H:i:s') . " -> tutor -> india" . '<br>';


        // echo "booking time " . $booking_class_time . '<br>';


        // date_default_timezone_set($all[0]->tutor->time_zone);
        // echo "india time zone " . date("h:i:sa"). '<br>';

        // $time_in_24_hour_format  = date("H:i:s", strtotime(date("h:i:sa")));
        // echo "current india time is:" . $time_in_24_hour_format;

        // return false;


        $pending = Booking::with(['user','tutor'])->where('booked_tutor',Auth::user()->id)->whereIn('status',[0,1])->get();
        $confirmed = Booking::with(['user','tutor'])->where('booked_tutor',Auth::user()->id)->status(2)->get();
        $completed = Booking::with(['user','tutor'])->where('booked_tutor',Auth::user()->id)->status(5)->get();
        $cancelled = Booking::with(['user','tutor'])->where('booked_tutor',Auth::user()->id)->whereIn('status',[3,4])->get();
        // dd($pending->toArray());
        return view('tutor.pages.booking.index',compact('all','pending','confirmed','completed','cancelled'));
    }

    /**
     *  Return Tutor Chat view
     */
    public function bookingDetail($id){
        $booking = Booking::find($id);
        $tutor = \Auth::user();
        return view('tutor.pages.booking.booking_detail',compact('booking','tutor'));
    }


    public function getBookingDetail(Request $request) {
        $booking = Booking::with(['user','subject'])->where('id',$request->id)->first();

        return response()->json([
            "status_code" => 200,
            "success" => true,
            "booking" => $booking,
        ]);
    }

    public function acceptBooking($id ,Request $request){

        $booking = Booking::with('subject')->find($id);
        $booking->status = 1;
        $booking->save();

        $student = User::where('id',$booking->user_id)->first();
        $student_name = $student->first_name . ' ' . $student->last_name;

        // activity logs
        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
        $action_perform = '<a href="'.URL::to('/') . '/admin/tutor/profile/'. $id .'"> '.$name.' </a> Approve the Class ';
        $activity_logs = new GeneralController();
        $activity_logs->save_activity_logs("Approve Class", "bookings.id", $id, $action_perform, $request->header('User-Agent'), $id);

        $admin = User::where('role',1)->first();
        $student_id = $student->id;

        $notification = new NotifyController();
        $reciever_id = $admin->id;
        $slug = URL::to('/') . '/student/booking-detail/'. $booking->id ;
        $admin_slug = URL::to('/') . '/admin/booking-detail/'. $booking->id ;

        $type = 'class_booking_approved';
        $data = 'data';
        $title = 'Class Booking';
        $icon = 'fas fa-tag';
        $class = 'btn-success';
        $desc = $name . ' Approved the booking request of ' . $student_name;
        $stddesc = $name . ' Approved your booking request for ' . $booking->subject->name;
        $pic = Auth::user()->picture;

        $notification->GeneralNotifi( $reciever_id , $admin_slug ,  $type , $title , $icon , $class ,$desc,$pic);
        $notification->GeneralNotifi( $student_id , $slug ,  $type  , $title , $icon , $class ,$stddesc,$pic);

        return response()->json([
            'status'=>'200',
            'message' => 'Booking accepted.'
        ]);

    }

    public function cancelBooking(Request $request,$id)
    {
        $booking = Booking::find($id);

        $refund_amount = $booking->price + $booking->service_fee;
        $saleId = $booking->payment->first()->sale_id ?? '';

        if($saleId){

            $paymentValue =  (string) round($refund_amount,2);

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

                $booking->status = 3;
                $booking->save();
            }
         return redirect()->route('tutor.bookings')->with('success', '$'.$refundedSale->amount->total.' amount has been refunded to your account successfully!');

        }else{

            $booking->status = 4;
            $booking->save();

            return redirect()->route('tutor.booking')->with('success', 'Booking has been cancelled successfully!');
        }


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

    /**
     *  Return Tutor Chat view
     */
    public function chat(){
        return view('tutor.pages.chat.index');
    }
}
