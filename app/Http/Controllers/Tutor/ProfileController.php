<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\Degree;
use App\Models\General\Institute;
use App\Models\Admin\Subject;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\General\Education;
use App\Models\General\Professional;
use App\Models\Userdetail;

class ProfileController extends Controller
{
    /**
     *  Return Tutor Profile view
     */

    public function index(){
        $subjects = Subject::all();
        $degrees = Degree::all();
        $institutes = Institute::all();

        return view('tutor.pages.profile.index',compact('subjects','degrees','institutes'));
    }


    public function profileUpdate(Request $request)
    {
        
        $date_of_birth = $request->year.'-'.$request->month.'-'.$request->day;
        
        if($request->hasFile('filepond')){
            $path = 'storage/profile/'.$request->filepond->getClientOriginalName();
            $request->filepond->storeAs('profile',$request->filepond->getClientOriginalName(),'public');
        }

        $user = User::updateOrCreate(["email" => Auth::user()->email],[
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $date_of_birth,
            'picture' => ($request->hasFile('filepond') ? $path : \Auth::user()->picture),
            'phone' => $request->phone,
            'city' => $request->city,
            'country' => $request->country,
            'country_short' => $request->country_short,
            'language' => $request->language,
            'lang_short' => $request->lang_short,
            'gender' => $request->gender,
            'bio' => $request->bio,
        ]);
        
        return response()->json([
            "status_code" => 200,
            "success" => true,
            "message" => "Profile Updated Successfully",
        ]); 

        // return redirect()->back()->with('message','Your Profile has been successfully updated');
    }

    public function educationUpdate(Request $request)
    {
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



    public function professionUpdate(Request $request)
    {
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
