<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Subject;
use App\Models\General\Degree;
use App\Models\General\Institute;
use App\Models\Admin\SubjectCategory;


class ProfileController extends Controller
{

    public function index()
    {
        $subjects = Subject::all();
        $degrees = Degree::all();
        $institutes = Institute::all();
        $subject_cat = SubjectCategory::all();

        return view('student.pages.profile.index',compact('subjects','degrees','institutes','subject_cat'));
     
    }
}
