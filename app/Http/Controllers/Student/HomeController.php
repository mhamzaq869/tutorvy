<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     *  Return Student Dashboard view
     */

    public function index(){
        return view('student.pages.index');
    }
    public function bookNow(){
        return view('student.pages.booking.book_now');
    }
}
