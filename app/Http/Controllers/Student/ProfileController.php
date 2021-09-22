<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Subject;
use App\Models\General\Degree;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Activitylogs;
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

        $user_files = DB::table("user_files")->where('user_id',Auth::user()->id)->where('type',Auth::user()->type)->get()->toArray();

        return view('student.pages.profile.index',compact('subjects','degrees','institutes','subject_cat','user_files'));
     
    }

    public function profileUpdate(Request $request) {

        $date_of_birth = $request->year . '-' . $request->month . '-' . $request->day;

        $data =  array(
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
        );

        if($request->hasFile('filepond')){
            $data['picture'] = 'storage/profile/'.$request->filepond->getClientOriginalName();
            $request->filepond->storeAs('profile',$request->filepond->getClientOriginalName(),'public');
        }

        User::where('id', $request->user_id)->update($data);

        return response()->json([
            "status_code" => 200,
            "success" => true,
            "message" => "Profile Updated Successfully",
            "path" => (array_key_exists("picture",$data) ? $data['picture'] : Auth::user()->picture ),
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


    public function profileVerficationRecord(Request $request) {

        User::where('id', $request->user_id)->update([
            "type" => $request->security,
            "cnic_security" => $request->document_no,
        ]);

        $data = [];

        if($request->security == 1) {

            if($request->hasFile('id_card_pic')){
                $filename = 'storage/verfication/'.$request->id_card_pic->getClientOriginalName();
                array_push($data , $filename);
                $request->id_card_pic->storeAs('verifcation',$request->id_card_pic->getClientOriginalName(),'public');
            }
            
            if($request->hasFile('id_card_pic2')){
                $filename = 'storage/verfication/'.$request->id_card_pic2->getClientOriginalName();
                array_push($data , $filename);
                $request->id_card_pic2->storeAs('verifcation',$request->id_card_pic2->getClientOriginalName(),'public');
            }
            

        }else if($request->security == 2) {
            if($request->hasFile('license_pic')){
                $filename = 'storage/verfication/'.$request->license_pic->getClientOriginalName();
                array_push($data , $filename);
                $request->license_pic->storeAs('verifcation',$request->license_pic->getClientOriginalName(),'public');
            }
    
            if($request->hasFile('license_pic2')){
                $filename = 'storage/verfication/'.$request->license_pic2->getClientOriginalName();
                array_push($data , $filename);
                $request->license_pic2->storeAs('verifcation',$request->license_pic2->getClientOriginalName(),'public');
            }
        }else{

            if($request->hasFile('passport_pic')){
                $filename = 'storage/verfication/'.$request->passport_pic->getClientOriginalName();
                array_push($data , $filename);
                $request->passport_pic->storeAs('verifcation',$request->passport_pic->getClientOriginalName(),'public');
            }

        }

        foreach($data as $file) {
            DB::table("user_files")->insert([
                "user_id" => $request->user_id,
                "type" => $request->security,
                "files" => $file,
            ]); 
        }


        return response()->json([
            "status_code" => 200,
            "success" => true,
            "message" => "Verfication Completed",
        ]);  
    }


}
