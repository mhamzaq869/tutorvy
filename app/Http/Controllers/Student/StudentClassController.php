<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classroom;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class StudentClassController extends Controller
{
      /**
     *  Return Student Class Room view
     */

    public function index(){
        $classes = Classroom::with('booking')->get();
        $user = User::where('id',Auth::user()->id)->first();
        return view('student.pages.classroom.index',compact('classes','user'));
    }
    public function payment(){
        $payment = Booking::with(['tutor','subject'])->where('user_id',Auth::user()->id)->whereIn('status',['2','1'])->get();
        // return $payment;
        $spent_payment = Booking::where('status',2)->sum('price');
        return view('student.pages.payment.index',compact('payment','spent_payment'));
    }
}
