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

        return view('admin.pages.courses.index',compact('approved_courses','requested_courses'));
    }
    public function courseRequest($id)
    {
        $course = Course::with('outline')->where('status',0)->where('id',$id)->first();
        return view('admin.pages.courses.course_req',compact('course'));
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
