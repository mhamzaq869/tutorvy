<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Models\Activitylogs;
use App\Models\Classroom;
use App\Models\Booking;
use App\Models\User;
use App\Models\ClassroomLogs;

class ClassController extends Controller
{
      /**
     *  Return Tutor Class Room view
     */

    public function index(){
        $classes = Booking::with(['classroom','user','tutor','subject'])->where('booked_tutor',Auth::user()->id)->whereIn('status',[2,5])->get();
// return $classes;
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

        return response()->json([
            "message" => "Classroom logs saved",
            "status_code" => 200,
            "success" => true,
        ]);

    }
}
