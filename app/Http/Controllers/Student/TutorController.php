<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\General\Teach;
use App\Models\Admin\Subject;
use App\Models\Userdetail;

class TutorController extends Controller
{

    public function index()
    {
        $tutors = User::with(['education','professional','teach'])->where('role',2)->where('status',2)->get();
        // return $tutors;
        $subjects = Subject::all();
        return view('student.pages.tutor.index',compact('tutors','subjects'));
    }


    public function show ($id)
    {
        $tutor = User::with(['education','professional','teach','course'])->find($id);
        return view('student.pages.tutor.profile',compact('tutor'));
    }

    public function filter()
    {

    }


}
