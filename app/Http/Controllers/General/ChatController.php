<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Events\ChatMessage;
use App\Models\Activitylogs;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\General\Message;
use App\Events\Test;

class ChatController extends Controller
{
    /**
     *  Return Student Chat view
     */
    public function index()
    {
        return view('chat.index');
    }

    public function contactTutor($id)
    {
        $message = Message::updateOrCreate(['recipient_id' => $id],[
                        'sender_id' => auth()->id(),
                        'recipient_id' => $id,
                        'content' => ''
                    ]);
        $redirect = (Auth::user()->role == 3) ? 'student.chat' : 'tutor.chat' ;
        return redirect()->route($redirect);
    }

    public function unreadMesg()
    {

        $unreadIds = Message::select(DB::raw('sender_id, count(`sender_id`) as messages_count'))
        ->where('recipient_id', auth()->id())
        ->where('seen', 0)
        ->groupBy('sender_id')
        ->first();

        return $unreadIds->messages_count;

    }
    public function get()
    {

        $chatts = Message::where('sender_id',Auth::user()->id)->orWhere('recipient_id',Auth::user()->id)->get();
        $contacts = User::whereIn('id',$chatts->pluck('recipient_id')->unique()->flatten())
                    ->orWhereIn('id',$chatts->pluck('sender_id')->unique()->flatten())->get();


        // get a collection of items where sender_id is the user who sent us a message
        // and messages_count is the number of unread messages we have from him
        $unreadIds = Message::select(DB::raw('sender_id, count(`sender_id`) as messages_count'))
            ->where('recipient_id', auth()->id())
            ->where('seen', 0)
            ->groupBy('sender_id')
            ->get();

        // add an unread key to each contact with the count of unread messages
        $contacts = $contacts->map(function($contact) use ($unreadIds) {
            $contactUnread = $unreadIds->where('sender_id', $contact->id)->first();
            $contact->unread = $contactUnread ? $contactUnread->messages_count : 0;

            return $contact;

        });


        $message = Message::all();


        $contacts = $contacts->map(function($contact) use ($message) {
            $message = DB::select('select * from `messages` where (`sender_id` = ? or `recipient_id` = ?) and (`recipient_id` = ? or `sender_id` = ?) Order BY id desc LIMIT 1 ', [Auth::id(),Auth::id(),$contact->id,$contact->id]);
            $contact->lastmessage = $message ? $message[0]->content : '';
            $contact->lastmessageattach = $message ? $message[0]->attachments : '';
            $contact->lastmessagetime = $message ? date('h:i A',strtotime($message[0]->created_at)) : 0;
            return $contact;
        });

        // dd($contacts[1]);
        return response()->json($contacts);
    }

    public function getMessagesFor($id)
    {
        // mark all messages with the selected contact as read
        Message::where('sender_id', $id)->where('recipient_id', auth()->id())->update(['seen' => true]);

        // get all messages between the authenticated user and the selected user
        $messages = Message::where(function($q) use ($id) {
            $q->where('sender_id', auth()->id());
            $q->where('recipient_id', $id);
        })->orWhere(function($q) use ($id) {
            $q->where('sender_id', $id);
            $q->where('recipient_id', auth()->id());
        })
        ->get();

        return response()->json($messages);
    }

    public function send(Request $request)
    {
        // dd($request->all());
        if(request()->has('file')){
            $filename = request('file')->store('chat','public');
            $message = Message::create([
                'sender_id' => auth()->id(),
                'recipient_id' => $request->contact_id,
                'content' => '',
                'attachments' => $filename
            ]);
        }else{
            $message = Message::create([
                'sender_id' => auth()->id(),
                'recipient_id' => $request->contact_id,
                'content' => $request->text
            ]);
        }

        event(new ChatMessage($message));

        return response()->json($message);
    }




}
