<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Http\Controllers\General\NotifyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Activitylogs;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use Illuminate\Support\Facades\URL;
use App\Models\General\Teach;
use App\Models\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     *  Return Tutor Dashboard view
     */

    public function index(){

        // date_default_timezone_set('Asia/Karachi');
        // $date =date("Y/m/d H:m:s");

        // dd($date); 

        // $bookings = DB::table("bookings")->where('status', 2)->where('class_date',date('Y-m-d'))->get()->toArray();

        // $selectedTime = $bookings[0]->class_time;        
        // $endTime = strtotime("+15 minutes", strtotime($selectedTime));
        // dd(date('h:i', $endTime));

        $today_bookings = Booking::with('user')->where('booked_tutor',Auth::user()->id)->today()->take(2)->get();
        $upcoming_bookings = Booking::with('user')->where('booked_tutor',Auth::user()->id)->where('status',2)->take(2)->get();

        $new_bookings = Booking::where('booked_tutor',Auth::user()->id)->status(0)->get();
        $delivered_count = Booking::where('booked_tutor',Auth::user()->id)->where('status',5)->count();
        $upcoming_count = Booking::where('booked_tutor',Auth::user()->id)->where('status',2)->count();
        $pending_count = Booking::where('booked_tutor',Auth::user()->id)->whereIn('status',[0,1])->count();
        $subject_count = Teach::where('user_id',Auth::user()->id)->count();
        $user = User::where('id',Auth::user()->id)->first();


        $education_percentage = DB::table("educations")->where('user_id',Auth::user()->id)->count();
        $professional_percentage = DB::table("professionals")->where('user_id',Auth::user()->id)->count();
               
        return view('tutor.pages.index',compact('upcoming_bookings','today_bookings','new_bookings','delivered_count','upcoming_count','pending_count','subject_count','user','education_percentage','professional_percentage'));
    }
}
