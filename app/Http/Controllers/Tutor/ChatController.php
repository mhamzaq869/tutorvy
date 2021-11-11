<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Activitylogs;
use App\Events\NewMessage;
use App\Models\General\Message;

class ChatController extends Controller
{
    /**
     *  Return Tutor Chat view
     */

    
    public function index(){
        $students = User::where('role',3)->where('status',1)->get();
        return view('tutor.pages.chat.index',compact('students'));
    }

    public function sendMessage(Request $request){

        $message = Message::create([
            'sender_id' => auth()->id(),
            'recipient_id' => $request->user,
            'content' => request('msg')
        ]);
        broadcast(new NewMessage($message))->toOthers();
        // auth()->user()->markMessagesSeen($user);
        return response()->json([
            'status' => 'success'
        ]);

    }

    public function messages_between($id)
    {
        return $id;
        $user = User::where('id',$id)->first();
        
        $messages = auth()->user()->messages_between($user);
        
        return response()->json($messages);
    }
}
