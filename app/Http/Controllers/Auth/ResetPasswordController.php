<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SendOtpMail;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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

        if($user->count() != 0){
            $this->email = $user->email;
            Session::put('otp',rand(1000,9999));
            Mail::to($request->email)->send(new SendOtpMail($user));
            return view('auth.otp');
        }

        return redirect()->back()->with('error',$request->email." email doesn't exist!");
    }

    public function checkOtp(Request $request)
    {

        $otp = $request->digit1.$request->digit2.$request->digit3.$request->digit4;

        if($otp == Session::get('otp')){
            return redirect()->route('reset.password');
        }

        $request->session()->flash('error','Wrong OTP Code');

        return view('auth.otp');

    }


    public function updatePassword(Request $request)
    {
        dd($request->all());
    }

}
