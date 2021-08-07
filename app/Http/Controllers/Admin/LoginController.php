<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password,'role' => 1,'status' => 1])){
            Session::put('user',$request->all());
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->with('error','Credentials do not match');
    }

    /**
     *  Admin Logout Controller
     */

    public function logout()
    {
        Auth::logout();
        return redirect('admins');
    }
}
