<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Classroom;

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
}
