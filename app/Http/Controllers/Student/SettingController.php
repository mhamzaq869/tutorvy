<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Controllers\General\GeneralController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\FavTutors;
use App\Models\Booking;
use App\Models\Activitylogs;
use App\Models\Classroom;
use App\Models\Admin\tktCat;
use App\Models\Admin\supportTkts;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    /**
     *  Return Tutor setting view
     */

    public function index(){

        $user = User::where('id',\Auth::user()->id)->first();
        return view('student.pages.setting.index',compact('user'));
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

            return redirect()->back('success','Password updated');
        }

    }

    public function call(){
        $users = User::where('role',2)->get();

        return view('student.pages.classroom.call',compact('users'));
    }

    public function whiteBoard(){
        $users = User::where('role',3)->get();

        return view('student.pages.classroom.classroom',compact('users'));

    }

    public function join_class($class_room_id){
        $class = Classroom::where('classroom_id',$class_room_id)->first();
        $booking = Booking::where('id',$class->booking_id)->first();
        $user = User::where('id',\Auth::user()->id)->first();
        return view('student.pages.classroom.classroom',compact('class','user','booking'));
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
            $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> Update his Password';
            $activity_logs = new GeneralController();
            $activity_logs->save_activity_logs("Password Changed", "users.id", $id, $action_perform, $request->header('User-Agent'), $id);

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

        $ticket_no =  substr(str_shuffle($string),1,$length) . '-' . substr(str_shuffle($string),2,$length) . '-' . substr(str_shuffle($no),1,$length);

        $ticket = supportTkts::create([
            "subject" => $request->subject,
            "cat_id" => $request->category,
            "message" => $request->message,
            "user_id" => Auth::user()->id,
            "ticket_no" => $ticket_no,
        ]);

        // activity logs
        $id = Auth::user()->id; 
        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
        $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> Create a New Ticket';
        $activity_logs = new GeneralController();
        $activity_logs->save_activity_logs("Ticket Created", "support_tkts.id", $ticket->id, $action_perform, $request->header('User-Agent'), $id);

        return response()->json([
            "status_code" => 200, 
            "message" => "Ticket Created .. Our Staff will contact us soon.",
            "success" => true,
        ]);
    }


    function favouriteTutor(Request $request) {

        $tutor = User::where('id',$request->id)->first();
        $tutor_name = $tutor->first_name . ' ' . $tutor->last_name;

        // activity logs
        $id = Auth::user()->id;
        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;

        if($request->status == "fav") {
            
            FavTutors::create([
                "user_id" => Auth::user()->id,
                "tutor_id" => $request->id,
            ]);

            $message = 'Tutor Added in Favourite List';

            $title = 'Favourite Tutor';
            $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> Mark <a href="'.URL::to('/') . '/admin/tutor/profile/'. $id .'"> '.$tutor_name.' </a> Favourite ';


        }else{

            FavTutors::where("tutor_id",$request->id)->where("user_id",Auth::user()->id)->delete();

            $title = 'un-Favourite Tutor';
            $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> Mark <a href="'.URL::to('/') . '/admin/tutor/profile/'. $id .'"> '.$tutor_name.' </a> Profile Un-Favourite ';

            $message = 'Tutor Removed form Favourite List';

        }

        // activity logs
        $activity_logs = new GeneralController();
        $activity_logs->save_activity_logs($title, "users.id", $request->id, $action_perform, $request->header('User-Agent'), $id);

        return response()->json([
            "status_code" => 200, 
            "message" => $message,
            "success" => true,
        ]);

    }

    public function tickets($id) {        
        $ticket = supportTkts::where('ticket_no',$id)->with(['category','tkt_created_by'])->first();
        return view('student.pages.history.ticket_details',compact('ticket'));
    }

}
