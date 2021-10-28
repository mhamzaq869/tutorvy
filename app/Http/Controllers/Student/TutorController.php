<?php

namespace App\Http\Controllers\Student;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Activitylogs;
use App\Models\User;
use App\Models\General\Teach;
use App\Models\Admin\Subject;
use App\Models\Userdetail;
use App\Models\General\ViewTutorData;
use DB;
use App\Models\Booking;
class TutorController extends Controller
{

    public function index()
    {
        $subject = \Auth::user()->std_learn;
          
        $query = DB::table('users')
        ->select('view_tutors_data.*')
        ->leftJoin('teachs', 'users.id', '=', 'teachs.user_id')
        ->leftJoin('view_tutors_data', 'view_tutors_data.id', '=', 'users.id')
        ->where('users.role',2)
        ->where('users.status',2)
        ->where('view_tutors_data.subject_names','!=',null);
        $query->where(function($query2) use ($subject)
        {
            if($subject != null && $subject != ''){
                $query2->where('teachs.subject_id', $subject);
            }
            
        });

        $available_tutors = $query->orderByRaw('rating DESC')->groupByRaw('users.id')->get();

        foreach($available_tutors as $tutor) {
            $tutor->is_favourite = DB::table("fav_tutors")->where("user_id",Auth::user()->id)->where("tutor_id",$tutor->id)->first();
            // $tutor->tutor_subject_rate = DB::table("subject_plans")->where("user_id",$tutor->id)->min('rate');
        }

        $subjects = Subject::all();
        $locations = DB::table('search_locations')->get();

        return view('student.pages.tutor.index',compact('available_tutors','subjects','locations'));
    }

    public function filterTutor(Request $request)
    {
        $subject = $request->subject;
        $lang = $request->language;
        $rating = $request->rating;
        $loc = $request->location;
        $price = $request->price;
        $gender = $request->gender;

        

        if($subject == '' || $subject == null){
            $subject = \Auth::user()->std_learn;
        }

        $query = DB::table('users')
        ->select('view_tutors_data.*')
        ->leftJoin('teachs', 'users.id', '=', 'teachs.user_id')
        ->leftJoin('view_tutors_data', 'view_tutors_data.id', '=', 'users.id')
        ->where('users.role',2)
        ->where('users.status',2)
        ->where('view_tutors_data.subject_names','!=',null);

        $query->where(function($query2) use ($subject)
        {
            if($subject != null && $subject != ''){
                $query2->where('teachs.subject_id', $subject);
            }
            
        });
        

        $query->where(function($query3) use ($lang)
        {
            if($lang != null && $lang != ''){
                $query3->where('users.lang_short', $lang);
            }
            
        });

        $query->where(function($query4) use ($rating)
        {
            if($rating != null && $rating != ''){
                $query4->where('users.rating','<=', $rating);
            }
            
        });

        $query->where(function($query5) use ($loc)
        {
            if($loc != null && $loc != ''){
                $query5->where('users.country', $loc);
            }
            
        });

        $query->where(function($query6) use ($gender)
        {
            if($gender != null && $gender != '' && $gender != 'any'){
                $query6->where('users.gender', $gender);
            }
            
        });

        // $query->where(function($query7) use ($price)
        // {
        //     if($price != null && $price != ''){
        //         $min_prc =  '';
        //         $max_prc =  '';
        //         $price = explode(';',$price);
        //         $min_prc = $price[0];
        //         $max_prc = $price[1];
                
        //         $query7->where('users.hourly_rate','>=', $min_prc)->where('users.hourly_rate','<=', $max_prc);
        //     }
            
        // });

        $available_tutors = $query->orderByRaw('rating DESC')->groupByRaw('users.id')->get();


        
        // $available_tutors = DB::table('users')
        // ->select('view_tutors_data.*','teachs.subject_id as subject_id')
        // ->leftJoin('teachs', 'users.id', '=', 'teachs.user_id')
        // ->leftJoin('view_tutors_data', 'view_tutors_data.id', '=', 'users.id')
        // ->where('users.role',2)
        // ->where('users.status',2)
        // ->where('teachs.subject_id',$subject)
        // ->where('users.lang_short', $request->language)
        // ->where('users.rating','<=', $request->rating)
        // // ->where('users.hourly_rate','<', $request->price)
        // ->where('users.country', $request->location)

        // ->get();

        foreach($available_tutors as $tutor) {
            $tutor->is_favourite = DB::table("fav_tutors")->where("user_id",Auth::user()->id)->where("tutor_id",$tutor->id)->first();
            // $tutor->tutor_subject_rate = DB::table("subject_plans")->where("user_id",$tutor->id)->min('rate');
        }

        return response()->json([
            'tutors' => $available_tutors,
            'status'=>'200',
            'message' => 'success'
        ]);
    }

    public function show ($id)
    {
        $tutor = User::with(['education','professional','teach','course'])->find($id);
        $delivered_classes = Booking::where('booked_tutor',$id)->where('status',5)->count();
        return view('student.pages.tutor.profile',compact('tutor','delivered_classes'));
    }

}
