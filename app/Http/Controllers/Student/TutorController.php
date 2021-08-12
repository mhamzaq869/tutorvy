<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\General\Teach;
use App\Models\Userdetail;

class TutorController extends Controller
{

    public function index()
    {
        $tutors = User::with(['education','professional','userdetail','teach'])->where('role',2)->where('status',1)->get();
        // dd($tutors->first()->userdetail->hourly_rate);
        return view('student.pages.tutor.index',compact('tutors'));
    }
}
