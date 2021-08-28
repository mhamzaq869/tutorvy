<?php

namespace App\Http\Controllers\Student;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\General\Teach;
use App\Models\Admin\Subject;
use App\Models\Userdetail;
use App\Models\General\ViewTutorData;
use DB;

class TutorController extends Controller
{

    public function index()
    {
        
        $available_tutors = ViewTutorData::select("*")
                        ->where('subjects', 'like', '%' . strval(\Auth::user()->std_learn) . '%')
                        // ->where('lang_short', $request->language)
                        // ->where('rating', $request->rating)
                        ->get()
                        ->toArray();
        
        $subjects = Subject::all();
        return view('student.pages.tutor.index',compact('available_tutors','subjects'));
    }

    public function filterTutor(Request $request)
    {
        $subject = $request->subject;
        $rate = $request->price;
        $where = '';
        if($subject == '' || $subject == null){
            $subject = \Auth::user()->std_learn;
        }

        if($rate == 0){
            $rate = null;
        }
        $available_tutors = ViewTutorData::select("*")
        ->where('subjects', 'like', '%' . strval($subject) . '%')
        ->where('lang_short', $request->language)
        ->where('rating', $request->rating)
        ->get()
        ->toArray();

        return response()->json([
            'tutors' => $available_tutors,
            'status'=>'200',
            'message' => 'success'
        ]);
    }

    public function show ($id)
    {
        $tutor = User::with(['education','professional','teach','course'])->find($id);
        return view('student.pages.tutor.profile',compact('tutor'));
    }

}
