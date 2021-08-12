<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SendOtpMail;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;


    private $email;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;



    public function reset(Request $request)
    {

        $user = User::where('email',$request->email)->count();

        if($user) {
           $otp = Session::put('otp',rand(1000,9999));
           return view('auth.otp');
        }


        return redirect()->back()->with('error',$request->email." email doesn't exists!");

    }


    public function updatePassword(Request $request)
    {
        dd($request->all());
    }
    public function resendOtp()
    {
        Session::put('otp',rand(1000,9999));
        return redirect()->back()->with('success',"New otp has been sended");
    }

}
