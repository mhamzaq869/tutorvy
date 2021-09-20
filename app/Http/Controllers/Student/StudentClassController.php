<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classroom;

class StudentClassController extends Controller
{
      /**
     *  Return Student Class Room view
     */

    public function index(){
        $classes = Classroom::with('booking')->get();

        return view('student.pages.classroom.index',compact('classes'));
    }
    public function payment(){

        return view('student.pages.payment.index');
    }
}
