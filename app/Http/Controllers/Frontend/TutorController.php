<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class TutorController extends Controller
{

    public function index()
    {
        $tutors = User::with(['education','professional','userdetail','teach'])->where('role',2)->where('status',1)->where('verify',1)->get();
        return view('frontend.findtutor',compact('tutors'));
    }
}
