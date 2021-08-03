<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Admin -- TutorController
    |--------------------------------------------------------------------------
    |
    | This controller handles Tutors from admin side
    |
    |
    */
    public function index()
    {
        return view('admin.pages.tutors.index');
    }
}
