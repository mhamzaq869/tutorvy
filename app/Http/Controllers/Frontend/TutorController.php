<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin\Subject;
use App\Models\Course;


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
        $locations = DB::table('search_locations')->get();

        // return $tutors;
        return view('frontend.findtutor',compact('locations','tutors','subjects','sub'));
    }

    public function filterTutor(Request $request)
    {
        
        $subject = '';
        $rate = $request->price;
        $where = '';
      
        if($rate == 0){
            $rate = null;
        }
        if(isset($request->subject) && $request->gender == 'any'){
            
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
            ->where('users.country', $request->location)
            ->where('users.rating','<=', $request->rating)

            ->get();

        }elseif($request->gender == 'any'){
        
            $tutors = DB::table('users')
            ->select('view_tutors_data.*')
            ->leftJoin('teachs', 'users.id', '=', 'teachs.user_id')
            ->leftJoin('view_tutors_data', 'view_tutors_data.id', '=', 'users.id')
            // ->where('teachs.subject_id', $subject->id )
            ->where('users.role',2)
            ->where('users.status',2)
            ->where('users.lang_short', $request->language)
            ->where('users.hourly_rate','<=', $request->price)
            ->where('users.rating','<=', $request->rating)
            ->where('users.country', $request->location)
            ->groupBy('users.id')
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
            ->where('users.gender', $request->gender)
            ->where('users.rating','<=', $request->rating)
            ->where('users.country', $request->location)
            ->groupBy('users.id')
            ->get();
        }
       
        return response()->json([
            'tutors' => $tutors,
            'status'=>200,
            'message' => 'success'
        ]);
        
    }
    // public function profileTutor(Request $request){
    //     return view('frontend.tutorProfile');
    // }
    public function profileTutor($id){
        $tutor = User::with(['education','professional','teach'])->where('id',$id)->where('role',2)->where('status',2)->first();
        $approved_courses = Course::where('user_id',$id)->where('status',1)->get();
        $requested_courses = Course::where('user_id',$id)->where('status',0)->get();
        
        return view('frontend.tutorProfile',compact('tutor','approved_courses','requested_courses'));
    }

    public function widgetTech(){
        return view('tutor.pages.classroom.widget');
    }

}
