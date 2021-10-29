<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Events\NewMessage;
use App\Models\Activitylogs;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\General\Message;

class ChatController extends Controller
{
    /**
     *  Return Student Chat view
     */


    public function index(){
        $tutors = User::where('role',2)->where('status',1)->get();
        // $contacts = Chat::where('sender_id',Auth::user()->id);
        return view('chat.index',compact('tutors'));
    }


}
