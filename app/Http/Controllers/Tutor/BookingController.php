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

class BookingController extends Controller
{
    /**
     *  Return Tutor Booking view
     */

    public function index() {
        $all = Booking::where('booked_tutor',Auth::user()->id)->get();
        $pending = Booking::where('booked_tutor',Auth::user()->id)->whereIn('status',[0,1])->get();
        $confirmed = Booking::where('booked_tutor',Auth::user()->id)->status(2)->get();
        $completed = Booking::where('booked_tutor',Auth::user()->id)->status(5)->get();
        $cancelled = Booking::where('booked_tutor',Auth::user()->id)->whereIn('status',[3,4])->get();
        
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
    
    /**
     *  Return Tutor Chat view
     */
    public function chat(){
        return view('tutor.pages.chat.index');
    }
}
