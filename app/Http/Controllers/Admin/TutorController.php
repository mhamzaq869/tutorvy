<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Assessment;
use App\Models\General\Teach;

class TutorController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Admin -- TutorController
    |--------------------------------------------------------------------------
    |
    | This controller handles Tutors from admin side
    |
    |
    */
    public function index()
    {
        $staff_members = User::whereNotIn('role', [1,2,3])->get();

        $approved_tutors = User::with(['education','professional','teach'])->where('role',2)->where('status',2)->get();
        
        $new_requests = array();

        $tutor_assessments = Assessment::where('status',0)->get();
            
        foreach($tutor_assessments as $assessment){
            $tutor = User::with(['education','professional','teach'])->where('id',$assessment->user_id)->where('role',2)->first();
            if($tutor){
                $assessment->tutor = $tutor;
                array_push($new_requests,$assessment);
            }
        }
    //    return $new_requests;
        return view('admin.pages.tutors.index',compact('new_requests','approved_tutors','staff_members'));
    }

    public function profile($id){
        $tutor = User::with(['education','professional','teach'])->where('id',$id)->where('role',2)->where('status',1)->first();
        $approved_courses = Course::where('user_id',$id)->where('status',1)->get();
        $requested_courses = Course::where('user_id',$id)->where('status',0)->get();

        return view('admin.pages.tutors.profile',compact('tutor','approved_courses','requested_courses'));
    }

    public function subjects($id){

        $tutor = User::with(['teach'])->where('id',$id)->where('role',2)->whereNotIn('status',[0,2])->first();
        $pending_subjects = Assessment::where('user_id',$id)->where('status',0)->get();

        return view('admin.pages.tutors.tutor_subjects',compact('tutor','pending_subjects'));
    }

    public function tutorRequest($id,$assess_id){

        $tutor = User::where('id',$id)->where('role',2)->first();
        $tutor_assessment =  Assessment::where('id',$assess_id)->first();
        
        return view('admin.pages.tutors.request',compact('tutor','tutor_assessment'));
    }

    public function tutorAssessment($assessment_id){

        $test = Assessment::where('id',$assessment_id)->first();
      
        return view('admin.pages.tutors.tutor_test',compact('test'));
    }

    public function verifyAssessment(Request $request){

        $assessment = Assessment::where('id',$request->id)->first();
        $assessment->status = $request->status;
        $assessment->assessment_note = $request->reason;
        $assessment->verified_by = \Auth::user()->id;

        $assessment->save();

        $message = '';
        if($request->status == 1){

            $user_id = $assessment->user_id;
            $subject_id = $assessment->subject_id;

            $teach = Teach::create([
                'user_id' => $user_id,
                'subject_id' => $subject_id,
                'verified_by' => \Auth::user()->id
            ]);

            $message = 'Assessment Verified.';
        }else{
            $message = 'Assessment Rejected.';
        }

        return response()->json([
            'status'=>'200',
            'message' => $message
        ]);
    }

    public function tutorStatus(Request $request){

        $tutor = User::where('id',$request->id)->first();
        $tutor->status = $request->status;
        $tutor->reject_note = $request->reason;

        $tutor->save();

        $message = '';
        if($request->status == 2){
            $message = 'Tutor Status Enabled.';
        }elseif($request->status == 3){
            $message = 'Tutor Rejected.';
        }else{
            $message = 'Tutor Status Disabled.';
        }

        return response()->json([
            'status'=>'200',
            'message' => $message
        ]);

    }

    public function tutor_Request($id)
    {
        
        // return view('admin.pages.tutors.tutor_req');
        $course = Course::with('outline')->where('status',0)->where('id',$id)->first();

        return view('admin.pages.courses.course_req',compact('course'));

    }
    public function tutorProfile()
    {
        // return view('admin.pages.tutors.tutor_profile');
        return view('admin.pages.courses.course_profile');

    }
}
