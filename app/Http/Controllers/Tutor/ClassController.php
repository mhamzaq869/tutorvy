<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Activitylogs;
use App\Models\Classroom;
use App\Models\User;
class ClassController extends Controller
{
      /**
     *  Return Tutor Class Room view
     */

    public function index(){
        
        $classes = Classroom::with('booking')->get();
        $user = User::where('id',Auth::user()->id)->first();

        return view('tutor.pages.classroom.index',compact('classes','user'));
    }
}
