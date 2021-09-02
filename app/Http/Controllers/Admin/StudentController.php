<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class StudentController extends Controller
{
     /*
    |--------------------------------------------------------------------------
    | Admin -- StudentController
    |--------------------------------------------------------------------------
    |
    | This controller handles Student from admin side
    |
    |
    */

    public function index()
    {
        $students = User::where('role',3)->paginate(15);
        return view('admin.pages.students.index',compact('students'));
    }

    public function profile($id){

        $student = User::where('role',3)->where('id',$id)->first();
        return view('admin.pages.students.profile',compact('student'));

    }
}
