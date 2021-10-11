<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Http\Controllers\General\GeneralController;
use App\Http\Controllers\General\NotifyController;
use App\Models\Assessment;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Activitylogs;
use App\Models\Admin\Subject;
use App\Models\subjectPlans;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class AssessmentController extends Controller
{

    public function index($id)
    {
        return view('tutor.test',compact('id'));
    }

    public function store(Request $request) {

        $assessment = Assessment::create([
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

        
        $minimum_rate = DB::table("subject_plans")->where('user_id',Auth::user()->id)->min('rate');

        if($minimum_rate) {
            User::where('id',Auth::user()->id)->update([
                "hourly_rate" => $minimum_rate,
            ]);
        }

        // activity logs
        $id = Auth::user()->id; 
        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
        $action_perform = '<a href="'.URL::to('/') . '/admin/tutor/profile/'. $id .'"> '.$name.' </a> Create new Assessment';
        $activity_logs = new GeneralController();
        $activity_logs->save_activity_logs("Asseessment Created", "assessments.id", $assessment->id, $action_perform, $request->header('User-Agent'), $id);

        $subject = Subject::where('id',$request->subject)->first();

        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
        $admin = User::where('role',1)->first();

        $notification = new NotifyController();
        $slug = URL::to('/') . '/admin/tutor';
        $type = 'tutor_submit_assessment';
        $data = 'data';
        $title = 'Assessment Verification';
        $icon = 'fas fa-tag';
        $class = 'btn-success';
        $desc = $name . ' Submitted Assessment of ' . $subject->name . ' for Verfication';
        $pic = Auth::user()->picture;

        $notification->GeneralNotifi( $admin->id , $slug ,  $type , $title , $icon , $class ,$desc,$pic);

        return response()->json([
            "status_code" => 200,
            "success" => true,
        ]);
    }
}
