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
        broadcast(new NewMessage($message))->toOthers();
        return response()->json([
            'status' => 200
        ]);

    }

    public function chatContact()
    {
        $chatts = Message::where('sender_id',Auth::user()->id)->get();
        $chats = User::whereIn('id',$chatts->pluck('recipient_id')->unique()->flatten())->get();

        return response()->json($chats);
    }

    public function fetchMessages($to)
    {
        $id = Auth::user()->id;
        $messages = DB::select('select * from `chats` where (`sender_id` = ? or `recipient_id` = ?) and (`recipient_id` = ? or `sender_id` = ?)', [$id,$id,$to,$to]);

        $all = [];

        foreach($messages as $message){

            if($message->user_id == Auth::user()->id):
                $html = '<a href="javascript:void(0)" onclick="message('.$message->id.')" id="users-'.$message->user_id.'"><div class="outgoing_msg" ><div class="sent_msg">';
                $html .= '<p>'.$message->message.'</p>';
                $html .= ' <span class="time_date"> '.date('H:i A',strtotime($message->created_at)).'    |   '.date('M d',strtotime($message->created_at)).'</span></div></div></a>';
            else:
                $html = '<a href="javascript:void(0)" onclick="message('.$message->id.')" id="users-'.$message->user_id.'"><div class="incoming_msg"><div class="incoming_msg_img">';
                $html .= '<img style="width:50px" src="'.asset($message->toUser->photo ?? "upload/profile/profile.jpg").'" alt="sunil"> </div>';
                $html .= '<div class="received_msg">';
                $html .= '<div class="received_withd_msg">';
                $html .= '<p>'.$message->message.'</p>';
                $html .= '</div></div>></a>';
            endif;


            array_push($all,$html);
        }
        return response([$all],200);


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
