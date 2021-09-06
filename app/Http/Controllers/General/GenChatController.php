<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Events\NewMessage;
use App\Events\CallSignal;
use App\Models\General\Message;

class GenChatController extends Controller
{
    /**
     *  Return Student Chat view
     */

    public function sendMessage(Request $request){

        $message = Message::create([
            'sender_id' => auth()->id(),
            'recipient_id' => $request->user,
            'content' => request('msg')
        ]);
        broadcast(new NewMessage($message))->toOthers();
        // auth()->user()->markMessagesSeen($user);
        return response()->json([
            'status' => 200
        ]);

    }

    public function messages_between($id)
    {
        $user = User::where('id',$id)->first();
        
        $messages = auth()->user()->messages_between($user);
        
        return response()->json($messages);
    }

    public function sendSignal(Request $request){
        $message = $request->msg;
        broadcast(new CallSignal($message))->toOthers();
        // auth()->user()->markMessagesSeen($user);
        return response()->json([
            'status' => 200
        ]);

    }

}
