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
        return $request->all();
        // $request->dob = $request->year.'-'.$request->month.'-'.$request->day;
        
        // if($request->hasFile('filepond')){
        //     $path = 'storage/profile/'.$request->filepond->getClientOriginalName();
        //     $request->filepond->storeAs('profile',$request->filepond->getClientOriginalName(),'public');
        // }

        // $user = User::updateOrCreate(["email" => Auth::user()->email],[
        //     'first_name' => $request->first_name ?? Auth::user()->first_name,
        //     'last_name' => $request->last_name ?? Auth::user()->last_name,
        //     'dob' => $request->dob ?? Auth::user()->dob,
        //     'picture' => $path ?? Auth::user()->picture,
        //     'phone' => $request->phone ?? Auth::user()->phone,
        //     'city' => $request->city ?? Auth::user()->city,
        //     'country' => $request->country ?? Auth::user()->country,
        //     'country_short' => $request->country_short ?? Auth::user()->country_short,
        //     'type' => (($request->type == 1) ? 'cnic' : 'security') ?? Auth::user()->type,
        //     'cnic_security' => ($request->cnic ?? $request->security) ?? Auth::user()->cnic_security,
        //     'language' => $request->language ?? Auth::user()->language,
        //     'lang_short' => $request->lang_short ?? Auth::user()->lang_short,
        //     'gender' => $request->gender ?? Auth::user()->gender,
        //     'bio' => $request->bio ?? Auth::user()->bio,
        // ]);

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
