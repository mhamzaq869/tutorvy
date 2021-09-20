<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classroom;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;


class StudentClassController extends Controller
{
      /**
     *  Return Student Class Room view
     */

    public function index(){
        $classes = Classroom::with('booking')->get();

        return view('student.pages.classroom.index',compact('classes'));
    }
    public function payment(){
        $payment = Booking::with(['tutor','subject'])->where('user_id',Auth::user()->id)->whereIn('status',['2','1'])->get();
        // return $payment;
        return view('student.pages.payment.index',compact('payment'));
    }
}
