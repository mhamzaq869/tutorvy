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
        $today = Booking::where('booked_tutor',Auth::user()->id)->status(0)->get();
       
        $tomorrow = Booking::where('booked_tutor',Auth::user()->id)->status(2)->get();
        $pending = Booking::where('booked_tutor',Auth::user()->id)->status(1)->get();
        $delivered = Booking::where('booked_tutor',Auth::user()->id)->status(5)->get();

        return view('tutor.pages.booking.index',compact('today','tomorrow','pending','delivered'));
    }

    /**
     *  Return Tutor Chat view
     */
    public function bookingDetail($id){
        $booking = Booking::find($id);
        $tutor = \Auth::user();
        return view('tutor.pages.booking.booking_detail',compact('booking','tutor'));
    }

    public function acceptBooking($id){

        $booking = Booking::find($id);
        $booking->status = 1;
        $booking->save();

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
