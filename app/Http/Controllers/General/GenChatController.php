<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Events\NewMessage;
use App\Events\CallSignal;
use Illuminate\Support\Facades\Auth;
use App\Models\General\Message;
use App\Models\Notification;

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

    public function saveToken(Request $request) {

        $user = User::where("id", Auth::user()->id)->first();

        if ($user->token != NULL && $user->token != '') {
            $fcm_array = json_decode($user->token);
            $token = $request->token;
            $entry = current(array_filter($fcm_array, function ($e) use ($token) {
                return $e->token == $token;
            }));

            if ($entry === false) {
                $fcm_data = array();
                $fcm_data['token'] = $request->token;
                $fcm_data['device'] = 'Windows';
                array_push($fcm_array, $fcm_data);
                $user->token = $fcm_array;
                $user->token_updated_at = date('Y-m-d h:m:s');                
                $user->is_token_updated = 1;
                $user->save();
            }
        }else{
            $fcm_data = array();
            $fcm_array = array();
            $fcm_data['token'] = $request->token;
            $fcm_data['device'] = 'Windows';
            array_push($fcm_array, $fcm_data);            
            $user->token = json_encode($fcm_array);
            $user->token_updated_at = date('Y-m-d h:m:s');
            $user->is_token_updated = 1;
            $user->save();
        }
    }


    function getAllNotification(Request $request) {
        $notification = Notification::where('receiver_id', Auth::user()->id)->get();

        return response()->json([
            "status_code" => 200,
            "success" => true,
            "notification" => $notification,
        ]);
    }

}
