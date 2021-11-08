<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\RolesPermissions;
use App\Models\User;

class LoginController extends Controller
{

    /**
     * Admin Index Controller Method
     *
     */
    public function index()
    {
        if(Auth::check()){
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    /**
     * Admin Login Controller Method
     */

    public function login(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        if($user) {

            if($user->role != 2 && $user->role != 3) {

                if(Auth::attempt( ["email" => $request->email,"password" => $request->password,"status" => 1]) ) {

                    $permisssions = RolesPermissions::where('role_id', $user->role)->where('permission',1)->get();

                    Session::put('permisssions',$permisssions);

                    return redirect()->route('admin.dashboard');

                }else{
                    return redirect()->back()->with('error','In-valid credentials');
                }
            }else{
                return redirect()->back()->with('error','You are not authorized to login');
            }

        }else{
            return redirect()->back()->with('error','User Not Exist in our database');
        }
        // dd($user);
        // if(Auth::attempt(["email" => $request->email,"password" => $request->password,"status" => 1])){
        //     dd(Auth::user());
        //     Session::put('user',$request->all());
        //     return redirect()->route('admin.dashboard');
        // }

        // return redirect()->back()->with('error','Credentials do not match');
    }

    /**
     *  Admin Logout Controller
     */

    public function logout()
    {
        $user = Auth::user();
        $user->token = null;
        $user->save();
        Auth::logout();
        return redirect('admins');

    }
}
