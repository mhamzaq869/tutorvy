<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Http\Controllers\General\GeneralController;
use App\Http\Controllers\General\NotifyController;
use Illuminate\Http\Request;
use App\Models\General\Degree;
use App\Models\General\Institute;
use App\Models\Admin\Subject;
use App\Models\Activitylogs;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\General\Education;
use App\Models\General\Professional;
use App\Models\Userdetail;
use Illuminate\Support\Facades\URL;

class ProfileController extends Controller
{
    /**
     *  Return Tutor Profile view
     */

    public function index(){

        $subjects = Subject::all();
        $degrees = Degree::all();
        $institutes = Institute::all();
        // $user_files = DB::table("user_files")->where('user_id',Auth::user()->id)->where('type',Auth::user()->type)->get()->toArray();
        return view('tutor.pages.profile.index',compact('subjects','degrees','institutes'));
    }


    public function profileUpdate(Request $request) {

        $date_of_birth = $request->year.'-'.$request->month.'-'.$request->day;

        $data =array(
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
        
        User::where('id',$request->user_id)->update($data);

        $location = DB::table('search_locations')->where('name', $request->country)->first();

        if(empty($location)) {
            DB::table('search_locations')->insert([
                'name' => $request->country,
            ]);
        }

        // activity logs
        $id = Auth::user()->id; 
        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
        $action_perform = '<a href="'.URL::to('/') . '/admin/tutor/profile/'. $id .'"> '.$name.' </a> Update his Profile';
        $activity_logs = new GeneralController();
        $activity_logs->save_activity_logs("Profile Updated", "users.id", $id, $action_perform, $request->header('User-Agent'), $id);

        $profile = DB::table("sys_settings")->where('user_id',Auth::user()->id)->where("title","tutor_profile_completed")->first();

        if(!$profile) {
            DB::table("sys_settings")->insert([
                "user_id" => Auth::user()->id, 
                "title" => "tutor_profile_completed",
            ]);
        }

        return response()->json([
            "status_code" => 200,
            "success" => true,
            "message" => "Profile Updated Successfully",
            "path" => (array_key_exists("picture",$data) ? $data['picture'] : Auth::user()->picture ),
        ]); 

    }

    public function updateProfileEdu($user_id ,Request $request) {
                
        $docs = [];

        if($request->hasFile('upload')){
            foreach($request->upload as $i => $upload){
                $path = 'storage/docs/'.$upload->getClientOriginalName();
                $upload->storeAs('docs',$upload->getClientOriginalName(),'public');
                array_push($docs,$path);
            }
        }

        for($i=0; $i < count($request->degree); $i++){
            Education::updateOrCreate([
                "user_id" => $user_id,
                "degree_id" => $request->degree[$i],
                "subject_id" => $request->major[$i],
                "institute_id" => $request->institute[$i],
                "year" => $request->graduate_year[$i],
                "docs" => $docs[$i] ?? '',
            ]);
        }

        // activity logs
        $id = Auth::user()->id; 
        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
        $action_perform = '<a href="'.URL::to('/') . '/admin/tutor/profile/'. $id .'"> '.$name.' </a> Update his Education Record';
        $activity_logs = new GeneralController();
        $activity_logs->save_activity_logs("Profile Updated", "education.id", $id, $action_perform, $request->header('User-Agent'), $id);

        return response()->json([
            "status_code" => 200,
            "success" => true,
            "message" => "Record Saved Successfully",
        ]); 
    }

    public function updateProfileProfession($user_id , Request $request) {

        for($i=0; $i < count($request->designation); $i++){
            Professional::updateOrCreate([
                "user_id" => $user_id,
                "designation" => $request->designation[$i],
                "organization" => $request->organization[$i],
                "start_date" => $request->degree_start[$i],
                "end_date" => $request->degree_end[$i],
            ]);
        }

        // activity logs
        $id = Auth::user()->id; 
        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
        $action_perform = '<a href="'.URL::to('/') . '/admin/tutor/profile/'. $id .'"> '.$name.' </a> Update his Professional Record';
        $activity_logs = new GeneralController();
        $activity_logs->save_activity_logs("Profile Updated", "professionals.id", $id, $action_perform, $request->header('User-Agent'), $id);
        
        return response()->json([
            "status_code" => 200,
            "success" => true,
            "message" => "Record Saved Successfully",
        ]);

    }

    public function updateProfileVerfication($user_id , Request $request) {
        User::where('id', $user_id)->update([
            "type" => $request->security,
            "cnic_security" => $request->document_no,
            "status" => 1,
        ]);

        $data = [];

        if($request->security == 1) {

            if($request->hasFile('id_card_pic')){
                $filename = 'storage/verifcation/'.$request->id_card_pic->getClientOriginalName();
                array_push($data , $filename);
                $request->id_card_pic->storeAs('verifcation',$request->id_card_pic->getClientOriginalName(),'public');
            }
            
            if($request->hasFile('id_card_pic2')){
                $filename = 'storage/verifcation/'.$request->id_card_pic2->getClientOriginalName();
                array_push($data , $filename);
                $request->id_card_pic2->storeAs('verifcation',$request->id_card_pic2->getClientOriginalName(),'public');
            }
            

        }else if($request->security == 2) {
            if($request->hasFile('license_pic')){
                $filename = 'storage/verifcation/'.$request->license_pic->getClientOriginalName();
                array_push($data , $filename);
                $request->license_pic->storeAs('verifcation',$request->license_pic->getClientOriginalName(),'public');
            }
    
            if($request->hasFile('license_pic2')){
                $filename = 'storage/verifcation/'.$request->license_pic2->getClientOriginalName();
                array_push($data , $filename);
                $request->license_pic2->storeAs('verifcation',$request->license_pic2->getClientOriginalName(),'public');
            }
        }else{

            if($request->hasFile('passport_pic')){
                $filename = 'storage/verifcation/'.$request->passport_pic->getClientOriginalName();
                array_push($data , $filename);
                $request->passport_pic->storeAs('verifcation',$request->passport_pic->getClientOriginalName(),'public');
            }

        }

        foreach($data as $file) {
            DB::table("user_files")->insert([
                "user_id" => $user_id,
                "type" => $request->security,
                "files" => $file,
            ]); 
        }

        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;

        $reciever = User::where('role',1)->first();
        $notification = new NotifyController();
        $sender_id = Auth::user()->id;
        $reciever_id = $reciever->id;
        $slug = '-' ;
        $type = 'doc_verification';
        $data = 'data';
        $title = 'Document Verfication';
        $icon = 'fas fa-tag';
        $class = 'btn-success';
        $desc = $name . ' Submitted documents for verification.';
        $notification->GeneralNotifi(Auth::user()->id, $reciever_id , $slug ,  $type , $data , $title , $icon , $class ,$desc);


        // activity logs
        $id = Auth::user()->id; 
        $action_perform = '<a href="'.URL::to('/') . '/admin/tutor/profile/'. $id .'"> '.$name.' </a> Upload his documents for verification';
        $activity_logs = new GeneralController();
        $activity_logs->save_activity_logs("Profile Updated", "user_files.user_id", $id, $action_perform, $request->header('User-Agent'), $id);

        return response()->json([
            "status_code" => 200,
            "success" => true,
            "message" => "Documents Saved. Please wait for Administrator approval",
        ]); 
    }

    public function educationUpdate(Request $request) {

        dd($request->all());
        Userdetail::updateOrCreate(['user_id' => Auth::user()->id],[
            'student_level' => $request->student_level,
            'hourly_rate' => $request->hour_rate,
        ]);

        if(Auth::user()->education){
            Auth::user()->education->each(function($record) {
                $record->delete(); // <-- direct deletion
             });
        }

        for($i=0; $i<count($request->degree); $i++){
            Education::updateOrCreate(['user_id' => Auth::user()->id],[
                "degree_id" => $request->degree[$i],
                "subject_id" => $request->major[$i],
                "institute" => $request->institute[$i],
                "year" => $request->graduate_year[$i],
                "docs" => $docs[$i] ?? null,
            ],['user_id']);
        }
    }



    public function professionUpdate(Request $request) {
        // return $request;

        // if(Auth::user()->professional){
        //     Auth::user()->professional->each(function($record) {
        //         $record->delete(); // <-- direct deletion
        //      });
        // }

        if($request->filled('designation')){
            for($i=0; $i<count($request->designation); $i++){
                Professional::updateOrCreate(['user_id' => Auth::user()->id],[
                    'designation' => $request->designation[$i],
                    'organization' => $request->organization[$i],
                    'start_date' => $request->degree_start[$i],
                    'end_date' => $request->degree_end[$i],
                ]);

            
            }
        }

        
        return redirect()->back()->with('message','Your Profession has been successfully updated');

    }

}
