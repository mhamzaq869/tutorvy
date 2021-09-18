<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;

class HomeController extends Controller
{
    /**
     *  Return Tutor Dashboard view
     */

    public function index(){
        return view('tutor.pages.index');
    }
}
