<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SendOtpMail;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\DocBlock\Tags\See;
use Illuminate\Support\Facades\Mail;

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

        $user = User::where('email',$request->email)->first();

        if($user){
            Session::put('changepass',$user->id);
            Session::put('otp',rand(1000,9999));
            Mail::to($request->email)->send(new SendOtpMail($user));
            return view('auth.otp');
        }

    }

    public function updatePassword(Request $request)
    {
        return
        $id = Session::get('changepass');

        User::find($id)->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->with('success','Your password has been changed!');
    }
    public function resendOtp()
    {
        Session::put('otp',rand(1000,9999));
        return response("New otp has been sended",200);
    }

}
