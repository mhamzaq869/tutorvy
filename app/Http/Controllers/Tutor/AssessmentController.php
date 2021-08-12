<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Models\Assessment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssessmentController extends Controller
{

    public function index($id)
    {
        return view('tutor.test',compact('id'));
    }

    public function store(Request $request)
    {

        Assessment::create([
            'user_id' =>  Auth::user()->id,
            'subject_id' => $request->subject,
            'question_1' => $request->question_1,
            'question_2' => $request->question_2,
            'question_3' => $request->question_3,
            'answer_1' => $request->answer_1,
            'answer_2' => $request->answer_2,
            'answer_3' => $request->answer_3,
        ]);

        return redirect()->route('tutor.dashboard');
    }
}
