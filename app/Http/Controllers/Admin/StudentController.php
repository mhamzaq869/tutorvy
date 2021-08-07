<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('admin.pages.students.index');
    }
}
