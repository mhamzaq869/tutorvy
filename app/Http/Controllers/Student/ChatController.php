<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Events\NewMessage;
use App\Models\General\Message;

class ChatController extends Controller
{
    /**
     *  Return Student Chat view
     */

    
    public function index(){
        $tutors = User::where('role',2)->where('status',1)->get();
        return view('student.pages.chat.index',compact('tutors'));
    }


}
