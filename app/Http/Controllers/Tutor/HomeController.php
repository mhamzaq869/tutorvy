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

        $new_bookings = Booking::where('booked_tutor',Auth::user()->id)->status(0)->get();
        $delivered_count = Booking::where('status',5)->count();
        $upcoming_count = Booking::where('status',2)->count();
        $pending_count = Booking::whereIn('status',[0,1])->count();
        $subject_count = Teach::where('user_id',Auth::user()->id)->count();

        return view('tutor.pages.index',compact('new_bookings','delivered_count','upcoming_count','pending_count','subject_count'));
    }
}
