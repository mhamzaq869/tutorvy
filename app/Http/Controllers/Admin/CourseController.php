<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\General\ClassTable;



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

        $classes = array();

        $cr_bs_dys = json_decode($course->basic_days);
        $cr_bs_clt = json_decode($course->basic_class_title,true);
        $cr_bs_clo = json_decode($course->basic_class_overview,true);
        $cr_bs_cst = json_decode($course->basic_class_start_time,true);
        $cr_bs_cet = json_decode($course->basic_class_end_time,true);

        for($i = 0 ; $i < sizeof($cr_bs_dys) ; $i++){
            $class = new ClassTable();
            $class->day = $cr_bs_dys[$i];
            $class->st_time = $cr_bs_cst[$cr_bs_dys[$i]];
            $class->et_time = $cr_bs_cet[$cr_bs_dys[$i]];
            $class->title = $cr_bs_clt[$cr_bs_dys[$i]];
            $class->overview = $cr_bs_clo[$cr_bs_dys[$i]];

            array_push($classes,$class);
        }
        $course->classes = $classes;

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
