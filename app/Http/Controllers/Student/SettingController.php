<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\FavTutors;
use App\Models\Classroom;
use App\Models\Admin\tktCat;
use App\Models\Admin\supportTkts;
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
        $class = Classroom::with('booking')->where('classroom_id',$class_room_id)->first();
        return view('student.pages.classroom.classroom',compact('class'));
    }

    public function change_password(Request $request) {

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'new_confirm_password' => 'required',
        ]);

        if(Hash::check($request->current_password, \Auth::user()->password)) {

            User::find(\Auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
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


    function favouriteTutor(Request $request) {

        if($request->status == "fav") {
            FavTutors::create([
                "user_id" => Auth::user()->id,
                "tutor_id" => $request->id,
            ]);
        }

    }

    public function tickets($id) {        
        $ticket = supportTkts::where('ticket_no',$id)->with(['category','tkt_created_by'])->first();
        return view('student.pages.history.ticket_details',compact('ticket'));
    }

}
