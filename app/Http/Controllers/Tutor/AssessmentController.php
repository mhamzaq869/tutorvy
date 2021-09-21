<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Models\Assessment;
use Illuminate\Http\Request;
use App\Models\subjectPlans;
use Illuminate\Support\Facades\Auth;

class AssessmentController extends Controller
{

    public function index($id)
    {
        return view('tutor.test',compact('id'));
    }

    public function store(Request $request)
    {

        return $request->all();

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

        $plans = [];


        if($request->preElementary == "on") {
            array_push($plans , array("experty_level" => 1 , "rate" => $request->preElementary_rate, "name" => "Pre-Elementary School"));
        }
        if($request->elementary == "on") {
            array_push($plans , array("experty_level" => 2 , "rate" => $request->elementary_rate, "name" => "Elementary School" ));
        }
        if($request->secondary == "on") {
            array_push($plans , array("experty_level" => 3 , "rate" => $request->secondary_rate, "name" => "Secondary School" ));
        }
        if($request->highSchool == "on") {
            array_push($plans , array("experty_level" => 4 , "rate" => $request->highSchool_rate, "name" => "High School" ));
        }
        if($request->postSec == "on") {
            array_push($plans , array("experty_level" => 5 , "rate" => $request->postSec_rate, "name" => "Post Secondary School" ));
        }

        for($i = 0; $i < count($plans); $i++) {

            subjectPlans::updateOrCreate([
                "subject_id" => $request->subject,
                "user_id" => Auth::user()->id,
                "experty_level" => $plans[$i]['experty_level'],
                "experty_title" => $plans[$i]['name'],
                "rate" => $plans[$i]['rate'],
            ]);

        }

        return response()->json([
            "status_code" => 200,
            "success" => true,
        ]);
    }
}
