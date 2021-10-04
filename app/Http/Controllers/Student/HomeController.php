<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\tktCat;
use App\Models\Activitylogs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Booking;
use App\Models\General\Teach;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     *  Return Student Dashboard view
     */

    public function index(){
        $categories = tktCat::all();

        $favorite_tutors = DB::table('users')
        ->select('view_tutors_data.*')
        ->leftJoin('teachs', 'users.id', '=', 'teachs.user_id')
        ->leftJoin('view_tutors_data', 'view_tutors_data.id', '=', 'users.id')
        ->leftJoin('fav_tutors','fav_tutors.tutor_id','=','users.id')
        ->where('fav_tutors.user_id',Auth::user()->id)
        ->where('users.role',2)
        ->where('users.status',2)
        ->groupByRaw('users.id')
        ->get();

        $today_bookings = Booking::with(['tutor'])->where('user_id',Auth::user()->id)->today()->take(2)->get();
        $upcoming_bookings = Booking::with(['tutor'])->where('user_id',Auth::user()->id)->where('status',2)->take(2)->get();

        $new_bookings = Booking::where('user_id',Auth::user()->id)->status(0)->get();
        $delivered_count = Booking::where('user_id',Auth::user()->id)->where('status',5)->count();
        $upcoming_count = Booking::where('user_id',Auth::user()->id)->where('status',2)->count();
        $pending_count = Booking::where('user_id',Auth::user()->id)->whereIn('status',[0,1])->count();
        $subject_count = Teach::where('user_id',Auth::user()->id)->count();

        // foreach($favorite_tutors as $tutor) {
        //     $tutor->is_favourite = DB::table("fav_tutors")->where("user_id",Auth::user()->id)->where("tutor_id",$tutor->id)->first();
        //     $tutor->tutor_subject_rate = DB::table("subject_plans")->where("user_id",$tutor->id)->min('rate');
        // }
        $user = User::where('id',Auth::user()->id)->first();
        // return ($today_bookings);
        
        $education_profile = User::where('id',Auth::user()->id)
            ->where('experty_level', '!=', NULL)
            ->where('std_subj' , '!=', NULL)
            ->where('std_learn' , '!=', NULL)
            ->count();
        
        return view('student.pages.index',compact('upcoming_bookings','today_bookings','new_bookings','delivered_count','upcoming_count','pending_count','subject_count','user','categories','favorite_tutors','education_profile'));
    }



}
