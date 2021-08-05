<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }



    protected function showRegistrationForm()
    {
        $user = User::where('ip',$_SERVER['REMOTE_ADDR'])->first();

        $user->day = date('d',strtotime($user->dob));
        $user->month = date('M',strtotime($user->dob));
        $user->year = date('Y',strtotime($user->dob));

        return view('tutor.register',compact('user'));
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function register(Request $data)
    {

        $data->ip = $_SERVER['REMOTE_ADDR'];
        $data->dob = $data->year.'-'.$data->month.'-'.$data->day;

        $user = User::where('ip',$data->ip)->get();

        if($user):
            return redirect()->back();
        else:
           $user = User::create([
                'first_name' => $data->first_name,
                'last_name' => $data->last_name,
                'email' => $data->email,
                'password' => Hash::make($data->password),
                'ip' => $data->ip,
                'dob' => $data->dob,
                'phone' => $data->phone,
                'city' => $data->city,
                'country' => $data->country,
                'country_short' => $data->country_short,
                'role' => $data->role,
                'type' => ($data->type == 1) ? 'cnic' : 'security',
                'cnic_security' => $data->cnic ?? $data->security,
                'language' => $data->language,
                'gender' => $data->gender,
                'bio' => $data->bio,
            ]);
        endif;

        dd($user);
    }
}
