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
        // return $course;
        return view('admin.pages.courses.course_req',compact('course'));
    }
    public function courseProfile($id)
    {
        $course = Course::with('outline')->where('status',1)->where('id',$id)->first();
        return view('admin.pages.courses.course_profile',compact('course'));
    }
    public function editCourseProfile()
    {
        return view('admin.pages.courses.course_edit');
    }

    public function courseStatus(Request $request){

        $course = Course::where('id',$request->id)->first();
        $course->status = $request->status;
        $course->reject_note = $request->reason;

        $course->save();

        $message = '';
        if($request->status == 1){
            $message = 'Course Status Enabled.';
        }elseif($request->status == 2){
            $message = 'Course Rejected.';
        }else{
            $message = 'Course Status Disabled.';
        }

        return response()->json([
            'status'=>'200',
            'message' => $message
        ]);

    }
}
