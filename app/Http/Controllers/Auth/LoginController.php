<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request)
    {
        /*
        *  validating user by his email address and if user
        *  if email/user validated then send Obj $user to login
        *  view
        */
        $user = User::where('email',$request->email)->where('role','!=',1)->first();
        if($user){
            return view('auth.login',compact('user'));
        }

        /*
        *  After validating email show only Password field
        *  and set value of valid_email,role in hidden input
        */

        if($request->filled('valid_email','password','role')){
            if(Auth::attempt(['email' => $request->valid_email, 'password' => $request->password,'role'=>$request->role ])){
                if($request->role == 2){
                    return redirect()->route('tutor.dashboard');
                }
                if($request->role == 3){
                    return redirect()->route('student.dashboard');
                }
                Session::put('user',$request->valid_email);
            }
            else{
                $user = User::where('email',$request->valid_email)->where('role','!=',1)->first();
                $error = 'Wrong! Password ';
                return view('auth.login',compact('user','error'));
            }
        }
        return redirect()->back()->with('error','Wrong! Email Address');

    }

    public function logged(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password,'role'=>$request->role])){
            Session::put('user',$request->email);
        }

        return redirect()->back()->with('error','Wrong Password');
    }


    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        $user->user['provider'] = 'google';

        $data = $this->_registerOrLogin($user->user);
        Auth::login($data);

        if($data->role == 2){
            return redirect()->route('tutor.dashboard');
        }

        if($data->role == 3){
            return redirect()->route('student.dashboard');
        }

        if(!$data->role){
            return redirect('role');
        }
    }

     /*
    *  Register User if not exist in db and if exist will login
    *  and redirect to dashboard
    */
    private function _registerOrLogin($data)
    {
        try{
            $user = User::where('email', $data['email'])->where('provider',$data['provider'])->first();
            if(!$user){
               $user = User::create([
                        'first_name' => $data['given_name'],
                        'last_name' => $data['family_name'],
                        'email' => $data['email'],
                        'picture' => $data['picture'],
                        'provider' => 'google',
                    ]);
            }

            return $user;

        }catch(Exception $e){

            dd($e->getMessage());
        }

    }
}
