<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Activitylogs;
use App\Models\General\Institute;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\Subject;
use App\Models\Admin\SubjectCategory;
use App\Models\Course;
use Illuminate\Support\Facades\Session;

class GeneralController extends Controller
{

    public function home() {
     
        $subjects = Subject::where('category_id',1)->get();
        $main_sub = SubjectCategory::all();
        return view('welcome',compact('subjects','main_sub'));
    }

    public function displaySub($id){
        $subjects = Subject::where('category_id',$id)->get();
        return response()->json($subjects);
    }
    public function subjects() {
     
        $subjects = Subject::where('category_id',1)->get();
        $main_sub = SubjectCategory::all();
        return view('frontend.subject',compact('subjects','main_sub'));
    }

    public function blog() {
 
        return view('frontend.blog');
    }

    public function career() {
 
        return view('frontend.career');
    }

    public function university(Request $request)
    {

        // $result = Http::get('http://universities.hipolabs.com/search',[
        //     "name" => ""
        // ]);

        $result = Institute::select('name')->get();
        return response($result,200);
        // ini_set('max_execution_time', 780);
        // $result = Http::get('http://universities.hipolabs.com/search',[
        //     "name" => ""
        // ]);

        // $data = json_decode($result);
        // foreach($data as $uni){
        //     $name = $uni->name;
        //     $country = $uni->country;
        //     $country_code = $uni->alpha_two_code;
        //     $domain = $uni->domains[0];

        //     $inst = Institute::create([
        //         'name' => $name,
        //         'country' => $country,
        //         'country_code' => $country_code,
        //         'inst_domain' => $domain

        //     ]);
        // }
        // return $data;
    }


    public function isEmailTaken(Request $request)
    {

        $user = User::where('email',$request->email)->count();

        if($user == 1){
            return true;
        }
    }



    public function loginOnRole(Request $request)
    {
        // dd($request->all());

        if($request->has('student')):
            User::find(Auth::user()->id)->update([
                'role' => 3,
                'status' => 1
            ]);

            return redirect()->route('student.dashboard');
        elseif($request->has('tutor')):
            User::find(Auth::user()->id)->update([
                'role' => 2,
                'status' => 1
            ]);

            return redirect()->route('tutor.dashboard');
        endif;

        return redirect()->back();
    }

    public function course(){

        $subjects = Subject::get();
        $courses = Course::get();
        // return $courses;
        return view('frontend.course',compact('subjects','courses'));

    }

    public function enroll($id)
    {
        if(Auth::check()):
            return redirect()->route('student.course-details',[$id]);
        else:
            Session::put('redirectUrlCourse',$id);
           return redirect()->route('student.register');
        endif;

    }

    public function save_activity_logs($module , $table_ref, $ref_id , $action_perform, $user_agent, $created_by) {
        Activitylogs::create([
            "module" => $module,
            "table_ref" => $table_ref,
            "ref_id" => $ref_id,
            "action_perform" => $action_perform,
            "user_agent" => $user_agent,
            "created_by" =>  $created_by,
        ]);
    }


}
