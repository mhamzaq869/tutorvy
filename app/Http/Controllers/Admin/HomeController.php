<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\NewNotification;
use App\Models\User;

class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Admin Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles admin dashboard and other view pages as
    | well.
    |
    */
    
    public function index()
    {
        //event(new NewNotification('Hello this is test mesage'));
        $tutors_count = User::where('role',2)->count();
        $students_count = User::where('role',3)->count();
    
        return view('admin.dashboard',compact('tutors_count','students_count'));
    }
}
