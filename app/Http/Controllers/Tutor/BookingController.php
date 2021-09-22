<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Activitylogs;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
