<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use App\Models\General\Teach;

class HomeController extends Controller
{
    /**
     *  Return Tutor Dashboard view
     */

    public function index(){

        $today_bookings = Booking::with('user')->where('booked_tutor',Auth::user()->id)->today()->take(2)->get();
        $upcoming_bookings = Booking::with('user')->where('booked_tutor',Auth::user()->id)->where('status',2)->take(2)->get();

        $new_bookings = Booking::where('booked_tutor',Auth::user()->id)->status(0)->get();
        $delivered_count = Booking::where('status',5)->count();
        $upcoming_count = Booking::where('status',2)->count();
        $pending_count = Booking::whereIn('status',[0,1])->count();
        $subject_count = Teach::where('user_id',Auth::user()->id)->count();

        return view('tutor.pages.index',compact('upcoming_bookings','today_bookings','new_bookings','delivered_count','upcoming_count','pending_count','subject_count'));
    }
}
