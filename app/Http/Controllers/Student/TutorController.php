<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Userdetail;

class TutorController extends Controller
{

    public function index()
    {
        $tutors = User::with('userdetail')->where('role',2)->where('status',1)->where('verify',1)->get();

        return view('student.pages.tutor.index',compact('tutors'));
    }
}
