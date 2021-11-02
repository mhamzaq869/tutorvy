<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Models\Activitylogs;
use App\Http\Controllers\General\NotifyController;
use App\Models\Classroom;
use App\Models\Booking;
use App\Models\User;
use App\Models\ClassroomLogs;
use DateTime;
use DateTimeZone;
use Carbon\Carbon;

class ClassController extends Controller
{
      /**
     *  Return Tutor Class Room view
     */

    public function index(){

       

        $classes = Booking::with(['classroom','user','tutor','subject','booking_payment'])
                    ->where('booked_tutor',Auth::user()->id)
                    ->whereIn('status',[2,5])->get();
        
        foreach($classes as $class) {
            if($class != null && $class->tutor != null && $class->tutor->time_zone != null) {
                date_default_timezone_set($class->tutor->time_zone);
                $date = date("h:i:sa");
                $class->actual_booking_time =  date("H:i", strtotime($date));
            }
        }
        // dd($classes);
        $user = User::where('id',Auth::user()->id)->first();
        $delivered_classess = DB::table("classroom")
        ->leftJoin('bookings', 'classroom.booking_id', '=', 'bookings.id')
        ->where('user_id',Auth::user()->id)
        ->count();
        
        return view('tutor.pages.classroom.index',compact('classes','user','delivered_classess'));
    }

    public function saveClassLogs(Request $request) {

        ClassroomLogs::create([
            "class_room_id" => $request->class_room_id, 
            "tutor_join_time" => $request->tutor_join_time,
        ]);

        $class = Classroom::where('id',$request->class_room_id)->first();
        $booking = Booking::where('id',$class->booking_id)->first();

        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
        $slug = URL::to('/') . '/student/class/'. $class->classroom_id;

        $notification = new NotifyController();

        $reciever_id = $booking->user_id;
        $type = 'class_started';
        $data = 'data';
        $title = 'Class Started';
        $icon = 'fas fa-tag';
        $class = 'btn-success';
        $desc = $name . ' Started the class. Here is the link to join class. <a href='.$slug.'>Class Link</a> ' ;
        $pic = Auth::user()->picture;

        $notification->GeneralNotifi( $reciever_id , $slug ,  $type , $title , $icon , $class ,$desc,$pic);

        return response()->json([
            "message" => "Classroom logs saved",
            "status_code" => 200,
            "success" => true,
        ]);

    }
}
