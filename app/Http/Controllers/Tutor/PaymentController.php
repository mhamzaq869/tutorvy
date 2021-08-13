<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     *  Return Tutor Payment view
     */

    public function index(){
        return view('tutor.pages.payment.index');
    }
}
