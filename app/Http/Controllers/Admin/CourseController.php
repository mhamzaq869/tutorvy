<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
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
        $approved_courses = Course::where('status',1)->get();
        $requested_courses = Course::where('status',0)->get();

        return view('admin.pages.courses.index');
    }
    public function courseRequest()
    {
        return view('admin.pages.courses.course_req');
    }
    public function courseProfile()
    {
        return view('admin.pages.courses.course_profile');
    }
    public function editCourseProfile()
    {
        return view('admin.pages.courses.course_edit');
    }
}
