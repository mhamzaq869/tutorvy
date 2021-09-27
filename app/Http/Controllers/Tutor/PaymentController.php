<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Activitylogs;
use App\Models\Booking;
use App\Models\User;

class PaymentController extends Controller
{
    /**
     *  Return Tutor Payment view
     */

    public function index(){
        $payment = Booking::with(['user','subject'])->where('booked_tutor',Auth::user()->id)->whereIn('status',['2','5'])->get();
        
        // dd($payment);
        return view('tutor.pages.payment.index',compact('payment'));
    }
}
