<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classroom;
use App\Models\Activitylogs;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin\sys_settings;



class StudentClassController extends Controller
{
      /**
     *  Return Student Class Room view
     */

    public function index(){
        
        $classes = Booking::with(['classroom','user','tutor','subject'])->where('user_id',Auth::user()->id)->where('status',2)->get();
        $user = User::where('id',Auth::user()->id)->first();
        // return $classes;
        $booked_classes = Booking::with('user')->where('user_id',Auth::user()->id)->where('status',5)->get();
        return view('student.pages.classroom.index',compact('classes','user','booked_classes'));
    }
    public function payment(){
        $payment = Booking::with(['tutor','subject'])->where('user_id',Auth::user()->id)->whereIn('status',['2','1'])->get();
        $spent_payment = Booking::where('status',2)->where('user_id',Auth::user()->id)->sum('price');
        
        return view('student.pages.payment.index',compact('payment','spent_payment'));
    }

    public function saveReview(Request $request) {

        Booking::where('id',$request->booking_id)->update([
            "student_review" => $request->review,
            "rating" => $request->star_rating,
            "is_reviewed" => 1,
        ]);

        return response()->json([
            "message" => "Rating Saved Successfully",
            "status_code" => 200, 
            "success" => true,
        ]);

    }


    public function saveClassLogs(Request $request) {

        $classRoomLogs = ClassroomLogs::where('class_room_id',$request->class_room_id)->first();

        if($classRoomLogs) {
            ClassroomLogs::where('class_room_id',$request->class_room_id)->update([
                "student_join_time" => $request->std_join_time
            ]);
        }

        return response()->json([
            "message" => "Classroom Logs Saved",
            "status_code" => 200,
            "success" => true,
        ]);

    }
}
