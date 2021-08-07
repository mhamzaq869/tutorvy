<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
      /**
     *  Return Tutor Class Room view
     */

    public function index(){
        return view('tutor.pages.classroom.index');
    }
}
