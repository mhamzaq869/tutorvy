<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\tktCat;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     *  Return Student Dashboard view
     */

    public function index(){
        $categories = tktCat::all();

        $favorite_tutors = DB::table('users')
        ->select('view_tutors_data.*','teachs.subject_id as subject_id')
        ->leftJoin('teachs', 'users.id', '=', 'teachs.user_id')
        ->leftJoin('view_tutors_data', 'view_tutors_data.id', '=', 'users.id')
        ->leftJoin('fav_tutors','fav_tutors.tutor_id','=','users.id')
        ->where('fav_tutors.user_id',Auth::user()->id)
        ->where('users.role',2)
        ->where('users.status',2)
        ->get();


        // foreach($favorite_tutors as $tutor) {
        //     $tutor->is_favourite = DB::table("fav_tutors")->where("user_id",Auth::user()->id)->where("tutor_id",$tutor->id)->first();
        //     $tutor->tutor_subject_rate = DB::table("subject_plans")->where("user_id",$tutor->id)->min('rate');
        // }
        $user = User::where('id',Auth::user()->id)->first();
        // return ($user);

        return view('student.pages.index',compact('user','categories','favorite_tutors'));
    }



}
