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
        $user = User::where('id',$id)->first();
        
        $messages = auth()->user()->messages_between($user);
        
        return response()->json($messages);
    }

}
