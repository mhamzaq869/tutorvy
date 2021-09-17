<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\tktCat;

class HomeController extends Controller
{
    /**
     *  Return Student Dashboard view
     */

    public function index(){
        $categories = tktCat::all();
        return view('student.pages.index',compact('categories'));
    }

}
