<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin\Subject;

use DB;

class TutorController extends Controller
{

    public function index(Request $request)
    {
        $sub = '';
        if($request->subject != null){

            $subject = Subject::where('name',$request->subject)->first();
            $sub = $subject->name;
            $tutors = DB::table('users')
            ->select('view_tutors_data.*','teachs.subject_id as subject_id')
            ->leftJoin('teachs', 'users.id', '=', 'teachs.user_id')
            ->leftJoin('view_tutors_data', 'view_tutors_data.id', '=', 'users.id')
            ->where('teachs.subject_id', $subject->id )
            ->where('users.role',2)
            ->where('users.status',2)
            ->get();
            $subjects = Subject::all();
            // return $tutors;
        }else{
            $tutors = DB::table('users')
            ->select('view_tutors_data.*')
            ->leftJoin('teachs', 'users.id', '=', 'teachs.user_id')
            ->leftJoin('view_tutors_data', 'view_tutors_data.id', '=', 'users.id')
            // ->where('teachs.subject_id', $subject->id )
            ->where('users.role',2)
            ->where('users.status',2)
            ->groupBy('users.id')
            ->get();
            // return $available_tutors;
            $subjects = Subject::all();
        }
        // return $tutors;
        return view('frontend.findtutor',compact('tutors','subjects','sub'));
    }

    public function filterTutor(Request $request)
    {
        
        $subject = '';
        $rate = $request->price;
        $where = '';
      
        if($rate == 0){
            $rate = null;
        }
        if(isset($request->subject)){
            
            $subject = Subject::where('name',$request->subject)->first();

            $tutors = DB::table('users')
            ->select('view_tutors_data.*','teachs.subject_id as subject_id')
            ->leftJoin('teachs', 'users.id', '=', 'teachs.user_id')
            ->leftJoin('view_tutors_data', 'view_tutors_data.id', '=', 'users.id')
            ->where('users.role',2)
            ->where('users.status',2)
            ->where('teachs.subject_id',$subject->id)
            ->where('users.lang_short', $request->language)
            ->where('users.hourly_rate','<=', $request->price)

            ->get();

        }else{
            $tutors = DB::table('users')
            ->select('view_tutors_data.*')
            ->leftJoin('teachs', 'users.id', '=', 'teachs.user_id')
            ->leftJoin('view_tutors_data', 'view_tutors_data.id', '=', 'users.id')
            // ->where('teachs.subject_id', $subject->id )
            ->where('users.role',2)
            ->where('users.status',2)
            ->where('users.lang_short', $request->language)
            ->where('users.hourly_rate','<=', $request->price)
            ->groupBy('users.id')
            ->get();
        }
       
        return response()->json([
            'tutors' => $tutors,
            'status'=>200,
            'message' => 'success'
        ]);
        
    }
}
