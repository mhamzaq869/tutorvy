<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Events\NewMessage;
use App\Events\CallSignal;
use Illuminate\Support\Facades\Auth;
use App\Models\General\Message;
use Illuminate\Support\Facades\DB;
class GenChatController extends Controller
{
    /**
     *  Return Student Chat view
     */

    public function sendMessage(Request $request){

        $message = Message::create([
            'sender_id' => auth()->id(),
            'recipient_id' => $request->user,
            'content' => $request->content
        ]);
        event(new NewMessage($message,Auth::user()->id));
        return response()->json([
            'status' => 200,
            $message
        ]);

    }

    public function chatContact()
    {
        $chatts = Message::where('sender_id',Auth::user()->id)->orWhere('recipient_id',Auth::user()->id)->get();
        $chats = User::whereIn('id',$chatts->pluck('recipient_id')->unique()->flatten())
                    ->orWhereIn('id',$chatts->pluck('sender_id')->unique()->flatten())->get();
        return response()->json($chats);
    }

    public function fetchMessages($to)
    {

        $id = Auth::user()->id;
        $messages = DB::select('select * from `messages` where (`sender_id` = ? or `recipient_id` = ?) and (`recipient_id` = ? or `sender_id` = ?)', [$id,$id,$to,$to]);

        return response()->json([$messages,User::find($to)]);


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
