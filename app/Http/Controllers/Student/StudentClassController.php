<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
      /**
     *  Return Student Class Room view
     */

    public function index(){
        return view('student.pages.classroom.index');
    }
}
