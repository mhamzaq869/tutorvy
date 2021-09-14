<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Subject;
use App\Models\General\Degree;
use App\Models\User;
use App\Models\General\Institute;
use App\Models\Admin\SubjectCategory;


class ProfileController extends Controller
{

    public function index()
    {
        $subjects = Subject::all();
        $degrees = Degree::all();
        $institutes = Institute::all();
        $subject_cat = SubjectCategory::all();

        return view('student.pages.profile.index',compact('subjects','degrees','institutes','subject_cat'));
     
    }

    public function profileUpdate(Request $request) {

        if($request->hasFile('filepond')){
            $path = 'storage/profile/'.$request->filepond->getClientOriginalName();
            $request->filepond->storeAs('profile',$request->filepond->getClientOriginalName(),'public');
        }

        $date_of_birth = $request->year . '-' . $request->month . '-' . $request->day;

        User::where('id', $request->user_id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $date_of_birth,
            'phone' => $request->phone,
            'city' => $request->city,
            'country' => $request->country,
            'country_short' => $request->country_short,
            'language' => $request->language,
            'lang_short' => $request->lang_short,
            'gender' => $request->gender,
            'bio' => $request->bio,
            'picture' =>  ($request->hasFile('filepond') ? $path : \Auth::user()->picture),
        ]);

        return response()->json([
            "status_code" => 200,
            "success" => true,
            "message" => "Profile Updated Successfully",
        ]);  
    }

    public function profileEducationRecord(Request $request) {

        User::where('id', $request->user_id)->update([
            "student_level" => $request->student_level,
            "std_subj" => $request->std_subj,
            "std_learn" => $request->std_learn,
        ]);
        

        return response()->json([
            "status_code" => 200,
            "success" => true,
            "message" => "Education Record Updated Successfully",
        ]);  

    }


}
