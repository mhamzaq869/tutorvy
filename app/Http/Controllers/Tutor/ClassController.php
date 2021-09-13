<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassController extends Controller
{
      /**
     *  Return Tutor Class Room view
     */

    public function index(){
        
        $classes = Classroom::with('booking')->get();
     
        return view('tutor.pages.classroom.index',compact('classes'));
    }
}
