<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Assessment;

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
        // $tutors = User::with('userdetail')->where('role',2)->get();
        // $tutors = User::with('userdetail')->with('assessment')->where('role',2)->get();
        $approved_tutors = User::with(['education','professional','userdetail','teach'])->where('role',2)->where('status',1)->get();
        
        $new_requests = array();

        $tutor_assessments = Assessment::where('status',0)->get();
            
        foreach($tutor_assessments as $assessment){
         
            $tutor = User::with(['education','professional','userdetail','teach'])->where('id',$assessment->user_id)->where('role',2)->first();

            $assessment->tutor = $tutor;
            array_push($new_requests,$assessment);
        
        }
        return view('admin.pages.tutors.index',compact('new_requests','approved_tutors'));
    }

    public function tutorRequest($id,$assess_id){

        $tutor = User::with('userdetail')->where('id',$id)->where('role',2)->first();
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
        $assessment->save();

        $message = '';
        if($request->status == 1){
            $message = 'Assessment Verified.';
        }else{
            $message = 'Assessment Rejected.';
        }

        return response()->json([
            'status'=>'200',
            'message' => $message
        ]);
    }

    public function verifyTutor(Request $request){

        $tutor = User::where('id',$request->id)->first();
        $tutor->status = $request->status;
        $tutor->reject_note = $request->reason;
        $tutor->save();

        $message = '';
        if($request->status == 1){
            $message = 'Tutor Verified.';
        }else{
            $message = 'Tutor Request Rejected.';
        }

        return response()->json([
            'status'=>'200',
            'message' => $message
        ]);
    }
}
