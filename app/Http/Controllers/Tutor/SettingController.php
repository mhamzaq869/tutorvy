<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\General\GeneralController;
use App\Http\Controllers\General\NotifyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Activitylogs;
use App\Models\Classroom;
use App\Models\ClassroomLogs;
use App\Models\Admin\tktCat;
use App\Models\Admin\supportTkts;
use App\Models\User;
use Illuminate\Support\Facades\URL;

class SettingController extends Controller
{
    /**
     *  Return Tutor setting view
     */

    public function index(){

        $user = User::where('id',\Auth::user()->id)->first();
        return view('tutor.pages.setting.index',compact('user'));
    }

    protected function validator(array $request)
    {
        return Validator::make($request, [
            'current_password'     => 'required',
            'new_password'     => 'required|min:6',
            'new_confirm_password' => 'required|same:new_password',
        ]);
    }

    public function changePassword(Request $request){

        $data = $request->all();
        
        $request->validate([
            'current_password'     => 'required',
            'new_password'     => 'required|min:6',
            'new_confirm_password' => 'required|same:new_password',
        ]);
 
        $user = User::find(auth()->user()->id);

        if(!\Hash::check($data['current_password'], $user->password)){
            // print_r('asd');exit;
            return back()->with('error','You have entered wrong password');

        }else{
            User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

            // activity logs
            $id = Auth::user()->id; 
            $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
            $action_perform = '<a href="'.URL::to('/') . '/admin/tutor/profile/'. $id .'"> '.$name.' </a> Change his Password';
            $activity_logs = new GeneralController();
            $activity_logs->save_activity_logs("Change Password", "users.id", $id, $action_perform, $request->header('User-Agent'), $id);

            return redirect()->back('success','Password updated');
        }

    }

    public function call(){
        $users = User::where('role',3)->get();

        return view('tutor.pages.classroom.call',compact('users'));

    }
    public function whiteBoard(){
        $users = User::where('role',3)->get();

        return view('tutor.pages.classroom.classroom',compact('users'));

    }

    public function start_class($class_room_id){

        $class = Classroom::with('booking')->where('classroom_id',$class_room_id)->first();
        $user = User::where('id',Auth::user()->id)->first();

        return view('tutor.pages.classroom.classroom',compact('class','user'));

    }

    public function saveClassLogs(Request $request) {

        ClassroomLogs::create([
            "class_room_id" => $request->class_room_id, 
            "tutor_join_time" => $request->tutor_join_time,
        ]);

        return response()->json([
            "message" => "Classroom logs saved",
            "status_code" => 200,
            "success" => true,
        ]);

    }

    public function change_password(Request $request) {

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'new_confirm_password' => 'required',
        ]);

        if(Hash::check($request->current_password, \Auth::user()->password)) {

            User::find(\Auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

            // activity logs
            $id = Auth::user()->id; 
            $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
            $action_perform = '<a href="'.URL::to('/') . '/admin/tutor/profile/'. $id .'"> '.$name.' </a> Change his Password';
            $activity_logs = new GeneralController();
            $activity_logs->save_activity_logs("Change Password", "users.id", $id, $action_perform, $request->header('User-Agent'), $id);

            $reciever = User::where('role',1)->first();
            $notification = new NotifyController();
            $sender_id = Auth::user()->id;
            $reciever_id = $reciever->id;
            $slug = '-' ;
            $type = 'user_logout';
            $data = 'data';
            $title = 'User Logout';
            $icon = 'fas fa-tag';
            $class = 'btn-success';
            $desc = $name . ' Logout from System.';
            $notification->GeneralNotifi(Auth::user()->id, $reciever_id , $slug ,  $type , $data , $title , $icon , $class ,$desc);

            return redirect()->back()->with(['success' => 'Password Change ...' , 'key' => 'password_changed']);
        }else{


            return redirect()->back()->with(['error' => 'You have entered wrong password', 'key' => 'password_changed']);

        }
    }

    public function getAllCategories() {
        $data = tktCat::all();
        
        return response()->json([
            "status_code" => 200, 
            "categories" => $data,
        ]);

    }

    public function saveTicket(Request $request) {

        $length = 3;
        $string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $no = '1234567890';

        $ticket_no =  substr(str_shuffle($string),2,$length) . '-' . substr(str_shuffle($string),3,$length) . '-' . substr(str_shuffle($no),2,$length);

        supportTkts::create([
            "subject" => $request->subject,
            "cat_id" => $request->category,
            "message" => $request->message,
            "user_id" => Auth::user()->id,
            "ticket_no" => $ticket_no,
        ]);

        return response()->json([
            "status_code" => 200, 
            "message" => "Ticket Created .. Our Staff will contact us soon.",
            "success" => true,
        ]);
    }


    public function ticket($id) {        
        $ticket = supportTkts::where('ticket_no',$id)->with(['category','tkt_created_by'])->first();
        return view('tutor.pages.history.ticket_details',compact('ticket'));
    }
}
