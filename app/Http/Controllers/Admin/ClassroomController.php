<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\Classroom;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\General\ClassTable;



class ClassroomController extends Controller
{

    public function index()
    {  
        $classes = Booking::with(['classroom','user','tutor','subject'])
            ->whereIn('status',[2,5])->get();
        
        // $delivered_classess = DB::table("classroom")
        // ->leftJoin('bookings', 'classroom.booking_id', '=', 'bookings.id')
        // ->count();

        $delivered_classess =  Booking::with(['classroom','user','tutor','subject'])->where('status',5)->get();
        
        return view('admin.pages.classroom.index',compact('classes','delivered_classess'));
    }
}
