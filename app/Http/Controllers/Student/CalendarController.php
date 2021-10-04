<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classroom;
use App\Models\Activitylogs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;

class CalendarController extends Controller
{
       /**
     *  Return Tutor Calendar view
     */

    public function index(){
        return view('tutor.pages.calendar.index');
    }
    public function calendarStudent(){

        $bookings = [];

        $classess = Classroom::with('booking')->get()->toArray();

        foreach($classess as $class) {
            array_push($bookings , 
                array( 
                    "titles" => $class['booking']['class_time'] , 
                    "start" => $class['booking']['class_date'],
                    "backgroundColor" => $class['booking']['class_time'] .','.$class['booking']['class_date'] .','.$class['booking']['duration'].','.$class['booking']['price'],
                ));
        }

        return view('student.pages.calendar.index', compact('bookings'));
    }
}
