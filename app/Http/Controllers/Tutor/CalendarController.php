<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\Models\Activitylogs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Models\Classroom;
use App\Models\Booking;
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249

class CalendarController extends Controller
{
       /**
     *  Return Tutor Calendar view
     */

    public function index(){
<<<<<<< HEAD
        return view('tutor.pages.calendar.index');
=======

        $bookings = [];

        $classess = Booking::where('booked_tutor',Auth::user()->id)->get();

        foreach($classess as $class) {
            array_push($bookings , 
                array( 
                    "titles" => $class->class_time, 
                    "start" => $class->class_date,
                    "backgroundColor" => $class->class_time .','.$class->class_date.','.$class->duration.','.$class->price,
                ));
        }

        // dd($bookings);
        return view('tutor.pages.calendar.index', compact('bookings'));
    }
    public function calendarStudent(){

        $bookings = [];

        $classess = Booking::where('user_id',Auth::user()->id)->get();

        foreach($classess as $class) {
            array_push($bookings , 
                array( 
                    "titles" => $class->class_time, 
                    "start" => $class->class_date,
                    "backgroundColor" => $class->class_time .','.$class->class_date.','.$class->duration.','.$class->price,
                ));
        }
        return view('student.pages.calendar.index', compact('bookings'));
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
    }
}
