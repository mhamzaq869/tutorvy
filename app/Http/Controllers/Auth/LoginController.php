<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
=======
use App\Http\Controllers\General\GeneralController;
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\URL;
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249

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
<<<<<<< HEAD
        /*
        *  validating user by his email address and if user
        *  if email/user validated then send Obj $user to login
        *  view
        */
        $user = User::where('email',$request->email)->where('role','!=',1)->first();
=======

        $user = User::where('email',$request->email)->where('role','!=',1)->first();

>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
        if($user){
            return view('auth.login',compact('user'));
        }

        /*
        *  After validating email show only Password field
        *  and set value of valid_email,role in hidden input
        */

        if($request->filled('valid_email','password','role')){
<<<<<<< HEAD
            if(Auth::attempt(['email' => $request->valid_email, 'password' => $request->password,'role'=>$request->role,'status' => 1])){
                Session::put('user',$request->valid_email);
                if($request->role == 2){
                    return redirect()->route('tutor.dashboard');
                }
=======
            if(Auth::attempt(['email' => $request->valid_email, 'password' => $request->password,'role'=>$request->role ])){
                if($request->role == 2){

                    // activity logs
                    $id = Auth::user()->id;
                    $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
                    $action_perform = '<a href="'.URL::to('/') . '/admin/tutor/profile/'. $id .'"> '.$name.' </a> Logged into system';
                    $activity_logs = new GeneralController();
                    $activity_logs->save_activity_logs("Login", "users", $id, $action_perform, $request->header('User-Agent'), $id);

                    if(Auth::user()->time_zone == null && Auth::user()->time_zone == "") {
                        User::where('id',Auth::user()->id)->update(["time_zone" => $request->time_zone]);
                    }

                    return redirect()->route('tutor.dashboard');
                }
                if($request->role == 3){

                    // activity logs
                    $id = Auth::user()->id;
                    $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
                    $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> Logged into system';
                    $activity_logs = new GeneralController();
                    $activity_logs->save_activity_logs("Login", "users", $id, $action_perform, $request->header('User-Agent'), $id);

                    $value = "";
                    if(isset($_COOKIE['t_id'])){
                        $value = $_COOKIE['t_id'];
                        \Cookie::queue(\Cookie::forget('t_id'));

                    }
                    if($value != ''){
                        return redirect()->route('student.book-now',[$value]);
                    }

                    if(Session::get('redirectUrlCourse')){
                        return redirect()->route('student.course-details',[Session::get('redirectUrlCourse')]);
                        Session::flush(Session::get('redirectUrlCourse'));
                    }

                    if(Auth::user()->time_zone == null && Auth::user()->time_zone == "") {
                        User::where('id',Auth::user()->id)->update(["time_zone" => $request->time_zone]);
                    }

                    return redirect()->route('student.dashboard');
                }
                Session::put('user',$request->valid_email);
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
            }
            else{
                $user = User::where('email',$request->valid_email)->where('role','!=',1)->first();
                $error = 'Wrong! Password ';
                return view('auth.login',compact('user','error'));
            }
        }
<<<<<<< HEAD
=======



>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
        return redirect()->back()->with('error','Wrong! Email Address');

    }

    public function logged(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password,'role'=>$request->role])){
            Session::put('user',$request->email);
        }

        return redirect()->back()->with('error','Wrong Password');
    }

<<<<<<< HEAD

    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
=======
    public function redirectGoogle($id)
    {
        Session::put('c_id',$id);
        return Socialite::driver('google')->asPopup()->redirect();
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
    }

    public function handleGoogleCallback()
    {
<<<<<<< HEAD
        $user = Socialite::driver('google')->user();
        $user->user['provider'] = 'google';

        $this->_registerOrLogin($user->user);

        return redirect()->route('tutor.dashboard');
    }

=======
        $c_id = Session::get('c_id');

        $user = Socialite::driver('google')->user();

        $user->user['provider'] = 'google';

        $data = $this->_registerOrLogin($user->user,$c_id);

        if($data == false || $data == ''){

            if($c_id == 2) {
                return redirect()->route('tutor.register')->with('error','Unable to login with this email.');
            }else if($c_id == 3) {
                return redirect()->route('student.register')->with('error','Unable to login with this email.');
            }else if($c_id == 0) {
                return redirect()->route('login')->with('error','Google account is not attached with any account.');
            }else{
                return redirect()->to('/');
            }
            // return redirect()->back()->with('error','Unable to login with this email.');
        }
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

    public function redirectFacebook($id)
    {
        Session::put('c_id',$id);
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $c_id = Session::get('c_id');

        $user = Socialite::driver('facebook')->user();
        $user->user['provider'] = 'facebook';

        $data = $this->_registerOrLogin($user->user,$c_id);

        if($data == false || $data == ''){

            if($c_id == 2) {
                return redirect()->route('tutor.register')->with('error','Unable to login with this email.');
            }else if($c_id == 3) {
                return redirect()->route('student.register')->with('error','Unable to login with this email.');
            }else if($c_id == 0) {
                return redirect()->route('login')->with('error','Facebook account is not attached with any account.');
            }else{
                return redirect()->to('/');
            }
            // return redirect()->back()->with('error','Unable to login with this email.');
        }
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


>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
     /*
    *  Register User if not exist in db and if exist will login
    *  and redirect to dashboard
    */
<<<<<<< HEAD
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

            Auth::login($user);

        }catch(Exception $e){
            
=======
    private function _registerOrLogin($data,$r)
    {

        try{
            $user = User::where('email', $data['email'])->where('provider',$data['provider'])->first();
            if(!$user && $r == 0){
                return false;
            }
            if(!$user){
               $user = User::create([
                    'first_name' => $data['given_name'],
                    'last_name' => $data['family_name'],
                    'email' => $data['email'],
                    'picture' => $data['picture'],
                    'provider' => 'google',
                    'role'=> $r
                ]);
            }else{
                if($user->role != $r){
                    return false;
                }
            }

            return $user;

        }catch(Exception $e){

>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
            dd($e->getMessage());
        }

    }
<<<<<<< HEAD
=======

    public function logout(Request $request)
    {
        $user = Auth::user();
        $cur_unnid = Session::get('unnid');
        $tokens = array();

        $tokens_obj = $user->token;

        if($tokens_obj != NULL){

            $tokens_obj = json_decode($tokens_obj);
            for($i = 0; $i < sizeof($tokens_obj) ; $i++ ){
                if($cur_unnid != $tokens_obj[$i]->token){
                    $fcm_data['token'] = $tokens_obj[$i]->token;
                    $fcm_data['device'] = 'Windows';
                    array_push($tokens,$fcm_data);
                }

            }
            if(sizeof($tokens) == 0 || $tokens == [] || $tokens == '[]'){
                $tokens = NULL;
                $user->token = $tokens;
                $user->save();
            }else{
                $user->token = json_encode($tokens);
                $user->save();
            }

        }

        Auth::logout();
        Session::flush();
        return redirect('/');
    }
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
}
