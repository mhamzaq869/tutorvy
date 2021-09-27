<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Activitylogs;

class PaymentController extends Controller
{
    /**
     *  Return Tutor Payment view
     */

    public function index(){
        return view('tutor.pages.payment.index');
    }
}
