<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Userdetail;

class TutorController extends Controller
{

    public function index()
    {
        $tutors = User::with(['education','professional','teach'])->where('role',2)->where('status',1)->where('verify',1)->get();
        return view('frontend.findtutor',compact('tutors'));
    }

    public function filterTutor(Request $request)
    {
        $user = User::with(['education','professional','teach'])->tutor()->active()->verified()->range($request->range)->location($request->locat)
                    ->language($request->lang)->gender($request->gender)
                    ->get();

        return response($user,201);
    }
}
