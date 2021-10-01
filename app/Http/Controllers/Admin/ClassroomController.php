<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\General\ClassTable;



class ClassroomController extends Controller
{
      /*
    |--------------------------------------------------------------------------
    | Admin -- CourseController
    |--------------------------------------------------------------------------
    |
    | This controller handles Courses from admin side
    |
    |
    */

    public function index()
    {  
        return view('admin.pages.classroom.index');
    }
}
