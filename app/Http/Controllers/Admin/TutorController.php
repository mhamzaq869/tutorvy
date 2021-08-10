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
        $tutors = User::with('userdetail')->where('role',2)->get();
        // return $tutors;
        return view('admin.pages.tutors.index',compact('tutors'));
    }

    public function tutorRequest($id){
        $tutor = User::with('userdetail')->where('role',2)->where('id',$id)->first();
        return view('admin.pages.tutors.request',compact('tutor'));
    }

    public function tutorAssessment($tutor_id , $subject_id){

        $test = Assessment::where('user_id',$tutor_id)->where('subject_id',$subject_id)->first();
      
        return view('admin.pages.tutors.tutor_test',compact('test'));
    }
}
