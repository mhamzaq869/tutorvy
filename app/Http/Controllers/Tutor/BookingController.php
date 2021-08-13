<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     *  Return Tutor Booking view
     */

    public function index(){
        return view('tutor.pages.booking.index');
    }
    public function chat(){
        return view('tutor.pages.chat.index');
    }
}
