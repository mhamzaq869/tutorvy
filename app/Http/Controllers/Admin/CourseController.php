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

        // Basic Classes
        $basic_classes = array();

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

            array_push($basic_classes,$class);
        }
        $course->basic_classes = $basic_classes;
        // Standard Classes
        $standard_classes = array();

        $cr_std_dys = json_decode($course->standard_days);
        $cr_std_clt = json_decode($course->standard_class_title,true);
        $cr_std_clo = json_decode($course->standard_class_overview,true);
        $cr_std_cst = json_decode($course->standard_class_start_time,true);
        $cr_std_cet = json_decode($course->standard_class_end_time,true);
        if( $cr_std_dys != "" || $cr_std_dys != 0 ){

            for($i = 0 ; $i < sizeof($cr_std_dys) ; $i++){
                $class = new ClassTable();
                $class->day = $cr_std_dys[$i];
                $class->st_time = $cr_std_cst[$cr_std_dys[$i]];
                $class->et_time = $cr_std_cet[$cr_std_dys[$i]];
                $class->title = $cr_std_clt[$cr_std_dys[$i]];
                $class->overview = $cr_std_clo[$cr_std_dys[$i]];

                array_push($standard_classes,$class);
            }
           
            
        }
        $course->standard_classes = $standard_classes;
        // Advance Classes
        $advance_classes = array();

        $cr_ad_dys = json_decode($course->advance_days);
        $cr_ad_clt = json_decode($course->advance_class_title,true);
        $cr_ad_clo = json_decode($course->advance_class_overview,true);
        $cr_ad_cst = json_decode($course->advance_class_start_time,true);
        $cr_ad_cet = json_decode($course->advance_class_end_time,true);
        if( $cr_ad_dys != "" || $cr_ad_dys != 0 ){

            for($i = 0 ; $i < sizeof($cr_ad_dys) ; $i++){
                $class = new ClassTable();
                $class->day = $cr_ad_dys[$i];
                $class->ad_time = $cr_ad_cst[$cr_ad_dys[$i]];
                $class->et_time = $cr_ad_cet[$cr_ad_dys[$i]];
                $class->title = $cr_ad_clt[$cr_ad_dys[$i]];
                $class->overview = $cr_ad_clo[$cr_ad_dys[$i]];
    
                array_push($advance_classes,$class);
            }
           
            
        }
       
        $course->advance_classes = $advance_classes;
        // return $course;
        return view('admin.pages.courses.course_req',compact('course'));
    }
    public function courseProfile($id)
    {
        $course = Course::with('outline')->where('status',1)->where('id',$id)->first();
        // Basic Classes
        $basic_classes = array();

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

            array_push($basic_classes,$class);
        }
        $course->basic_classes = $basic_classes;
        // Standard Classes
        $standard_classes = array();

        $cr_std_dys = json_decode($course->standard_days);
        $cr_std_clt = json_decode($course->standard_class_title,true);
        $cr_std_clo = json_decode($course->standard_class_overview,true);
        $cr_std_cst = json_decode($course->standard_class_start_time,true);
        $cr_std_cet = json_decode($course->standard_class_end_time,true);
        if( $cr_std_dys != "" || $cr_std_dys != 0 ){

            for($i = 0 ; $i < sizeof($cr_std_dys) ; $i++){
                $class = new ClassTable();
                $class->day = $cr_std_dys[$i];
                $class->st_time = $cr_std_cst[$cr_std_dys[$i]];
                $class->et_time = $cr_std_cet[$cr_std_dys[$i]];
                $class->title = $cr_std_clt[$cr_std_dys[$i]];
                $class->overview = $cr_std_clo[$cr_std_dys[$i]];

                array_push($standard_classes,$class);
            }
           
            
        }
        $course->standard_classes = $standard_classes;
        // Advance Classes
        $advance_classes = array();

        $cr_ad_dys = json_decode($course->advance_days);
        $cr_ad_clt = json_decode($course->advance_class_title,true);
        $cr_ad_clo = json_decode($course->advance_class_overview,true);
        $cr_ad_cst = json_decode($course->advance_class_start_time,true);
        $cr_ad_cet = json_decode($course->advance_class_end_time,true);
        if( $cr_ad_dys != "" || $cr_ad_dys != 0 ){

            for($i = 0 ; $i < sizeof($cr_ad_dys) ; $i++){
                $class = new ClassTable();
                $class->day = $cr_ad_dys[$i];
                $class->ad_time = $cr_ad_cst[$cr_ad_dys[$i]];
                $class->et_time = $cr_ad_cet[$cr_ad_dys[$i]];
                $class->title = $cr_ad_clt[$cr_ad_dys[$i]];
                $class->overview = $cr_ad_clo[$cr_ad_dys[$i]];
    
                array_push($advance_classes,$class);
            }
           
            
        }
       
        $course->advance_classes = $advance_classes;
        // return $course;
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
