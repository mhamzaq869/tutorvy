<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class BookingController extends Controller
{
    /**
     *  Return Tutor Booking view
     */

    public function index()
    {
        $today = Booking::where('booked_tutor',Auth::user()->id)->today()->get();
        $tomorrow = Booking::where('booked_tutor',Auth::user()->id)->tomorrow()->get();
        $pending = Booking::where('booked_tutor',Auth::user()->id)->status(0)->get();
        $delivered = Booking::where('booked_tutor',Auth::user()->id)->status(1)->get();

        return view('tutor.pages.booking.index',compact('today','tomorrow','pending','delivered'));
    }

    /**
     *  Return Tutor Chat view
     */
    public function bookingDetail($id){
        $booking = Booking::find($id);
        return view('tutor.pages.booking.booking_detail',compact('booking'));
    }

    /**
     *  Return Tutor Chat view
     */
    public function chat(){
        return view('tutor.pages.chat.index');
    }
}
