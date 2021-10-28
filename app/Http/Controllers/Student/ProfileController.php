<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Controllers\General\GeneralController;
use Illuminate\Http\Request;
use App\Models\Admin\Subject;
use App\Models\General\Degree;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Activitylogs;
use App\Models\User;
use App\Models\General\Institute;
use App\Models\Admin\SubjectCategory;
use Illuminate\Support\Facades\URL;
use App\Models\Booking;
use App\Models\subjectPlans;

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

        // activity logs
        $id = Auth::user()->id; 
        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
        $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> Update his Profile';
        $activity_logs = new GeneralController();
        $activity_logs->save_activity_logs("Profile Updated", "users.id", $id, $action_perform, $request->header('User-Agent'), $id);

        $user_general_profile = User::where('id',Auth::user()->id)->first();
        if($user_general_profile->profile_completed == 0) {
            User::where('id',Auth::user()->id)->update(["profile_completed" => 1]);
        }

        return response()->json([
            "status_code" => 200,
            "success" => true,
            "message" => "Profile Updated Successfully",
            "path" => (array_key_exists("picture",$data) ? $data['picture'] : Auth::user()->picture ),
        ]);  
    }

    public function profileEducationRecord(Request $request) {

        User::where('id', $request->user_id)->update([
            "experty_level" => $request->student_level,
            "std_subj" => $request->std_subj,
            "std_learn" => $request->std_learn,
        ]);     

        // activity logs
        $id = Auth::user()->id; 
        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
        $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> Update his Educational Record';
        $activity_logs = new GeneralController();
        $activity_logs->save_activity_logs("Profile Updated", "users.id", $id, $action_perform, $request->header('User-Agent'), $id);

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

        // activity logs
        $id = Auth::user()->id; 
        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
        $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> Upload Documents for verification';
        $activity_logs = new GeneralController();
        $activity_logs->save_activity_logs("Profile Updated", "users.id", $id, $action_perform, $request->header('User-Agent'), $id);


        return response()->json([
            "status_code" => 200,
            "success" => true,
            "message" => "Verfication Completed",
        ]);  
    }

    
    public function profile($id)
    {
        $favorite_tutors = DB::table('users')
        ->select('view_tutors_data.*')
        ->leftJoin('teachs', 'users.id', '=', 'teachs.user_id')
        ->leftJoin('view_tutors_data', 'view_tutors_data.id', '=', 'users.id')
        ->leftJoin('fav_tutors','fav_tutors.tutor_id','=','users.id')
        ->where('fav_tutors.user_id',$id)
        ->where('users.role',2)
        ->where('users.status',2)
        ->groupByRaw('users.id')
        ->get();

        $student = User::with(['education','professional','teach','course'])->find($id);
        $subjects = Subject::where('id',$student->std_subj)->first();
        $classes = Booking::where('user_id',$student->id)->where('status',5)->count();
        $reviews = Booking::where('user_id',$student->id)->where('student_review','!=',NULL)->count();
        $price = Booking::where('user_id',$student->id)->where('status',2)->sum('price');
        // dd($favorite_tutors);
        return view('student.pages.profile.profile',compact('student','subjects','favorite_tutors','classes','reviews','price'));
    }


      // show tutor plans
      public function showTutorPlans(Request $request) {
        $plans = subjectPlans::where("user_id", $request->user_id)->where("subject_id",$request->subject_id)->get();

        return response()->json([
            "tutor_plans" => $plans,
            "status_code" => 200,
            "success" => true,
        ]);
    }
}
