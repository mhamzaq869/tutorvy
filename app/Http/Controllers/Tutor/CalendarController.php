<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
       /**
     *  Return Tutor Calendar view
     */

    public function index(){
        return view('tutor.pages.calendar.index');
    }
    public function calendarStudent(){
        return view('student.pages.calendar.index');
    }
}
