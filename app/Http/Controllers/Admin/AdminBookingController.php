<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\General\ClassTable;

class AdminBookingController extends Controller
{
    public function index()
    {

        $all = Booking::orderBy('id','desc')->get();

        $pending = Booking::orderBy('id','desc')->whereIn('status',[0,1])->get();
        $confirmed = Booking::orderBy('id','desc')->where('status',2)->get();
        $completed = Booking::orderBy('id','desc')->where('status',5)->get();
        $cancelled = Booking::orderBy('id','desc')->whereIn('status',[3,4])->get();

        return view('admin.pages.booking.index',compact('all','pending','confirmed','completed','cancelled'));
    }

    public function bookingDetails($id) {
        $booking = Booking::find($id);
        return view('admin.pages.booking.booking_details',compact('booking'));
    }
}
