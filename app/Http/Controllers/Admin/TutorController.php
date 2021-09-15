<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Assessment;
use App\Models\General\Teach;
use DB;

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

        $approved_tutors = User::with(['education','professional','teach'])->where('role',2)->whereIn('status',[2])->paginate(15);
        

        // dd($approved_tutors);
        // $new_requests = array();

        $tutor_assessments = Assessment::get();

        $new_requests = DB::table('users')
            ->select('users.*','assessments.id as assessment_id','assessments.status as assessment_status','subjects.name as subject_name')
            ->leftJoin('assessments', 'users.id', '=', 'assessments.user_id')
            ->leftJoin('subjects', 'subjects.id', '=', 'assessments.subject_id')    
            // ->where('assessments.status','!=',1)
            ->where('users.role',2)
            ->whereIn('users.status', [0, 1, 2])
            ->paginate(15);
        //  return $new_requests;


        return view('admin.pages.tutors.index',compact('new_requests','approved_tutors','staff_members'));
    }
    public function profile($id){
        $tutor = User::with(['education','professional','teach'])->where('id',$id)->where('role',2)->where('status',2)->first();
        $approved_courses = Course::where('user_id',$id)->where('status',1)->get();
        $requested_courses = Course::where('user_id',$id)->where('status',0)->get();
        
        return view('admin.pages.tutors.profile',compact('tutor','approved_courses','requested_courses'));
    }

    public function all_tutor_req(){

        $new_requests = DB::table('users')
            ->select('users.*','assessments.status as assess_status','assessments.id as assessment_id','subjects.name as subject_name')
            ->leftJoin('assessments', 'users.id', '=', 'assessments.user_id')
            ->leftJoin('subjects', 'subjects.id', '=', 'assessments.subject_id')
            ->where('users.role',2)
            ->where('users.status',1)
            ->orwhere('users.status',2)
            ->where('assessments.status',0)
            ->get();
        return view('admin.pages.tutors.all-tutor-req',compact('new_requests'));

    }
    public function all_tutors(){
        $tutors = User::with(['education','professional','teach'])->where('role',2)->whereIn('status',[0,2,3])->get();
        return view('admin.pages.tutors.all-tutors',compact('tutors'));
    }



    public function subjects($id){

        $tutor = User::with(['teach'])->where('id',$id)->where('role',2)->first();
        $pending_subjects = Assessment::where('user_id',$id)->where('status',0)->get();
        
        return view('admin.pages.tutors.tutor_subjects',compact('tutor','pending_subjects'));
    }

    public function tutorRequest($id,$assess_id = null){

        $tutor = User::where('id',$id)->where('role',2)->first();
        $tutor_assessment =  Assessment::where('id',$assess_id)->first();
        // return $tutor;
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

        $tutor = User::where('id', $request->id)->first();
        $tutor->status = $request->status;
        $tutor->reject_note = $request->status == 2 ? NULL : $request->reason;

        if($request->is_new == 1){

            $location = $tutor->country;
            $loc = DB::table('search_locations')->where('name', $location)->first();
            if($loc){
            }else{
                DB::table('search_locations')->insert([
                    'name' => $location
                ]);
            }
        }
        if($tutor->rank == 0 && $request->status == 2){
            $tutor->rank = 1;
        }
        $tutor->save();

        $message = '';
        if($request->status == 2){
            $message = 'Tutor Status Enabled.';
        }elseif($request->status == 3){
            $message = 'Tutor Rejected.';
        }elseif($request->status == 0){
            $message = 'Tutor Status Disabled.';
        }

        return response()->json([
            'status'=>'200',
            'message' =>  $message ,
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
