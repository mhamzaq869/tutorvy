<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Userdetail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
     * @param  array  $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $request)
    {
        return Validator::make($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }



    protected function showRegistrationForm()
    {
        $user = User::where('ip',$_SERVER['REMOTE_ADDR'])->first();

        if(isset($user->dob)):
            $user->day = date('d',strtotime($user->dob)) ?? '0';
            $user->month = date('M',strtotime($user->dob));
            $user->year = date('Y',strtotime($user->dob));
        endif;
        return view('tutor.register',compact('user'));
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $request
     * @return \App\Models\User
     */
    protected function register(Request $request)
    {

        $request->ip = $_SERVER['REMOTE_ADDR'];
        $request->dob = $request->year.'-'.$request->month.'-'.$request->day;

        $user = User::where('ip',$request->ip)->first();

        if($user):
                $this->updateUser($user,$request);
                if($user->userdetailIp->count() != 0):
                    $this->updateUserdetail($user,$request);
                else:
                    $this->userdetail($user,$request);
                endif;
        else:

           $user = User::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'ip' => $request->ip,
                    'dob' => $request->dob,
                    'phone' => $request->phone,
                    'city' => $request->city,
                    'country' => $request->country,
                    'country_short' => $request->country_short,
                    'role' => $request->role,
                    'type' => ($request->type == 1) ? 'cnic' : 'security',
                    'cnic_security' => $request->cnic ?? $request->security,
                    'language' => $request->language,
                    'gender' => $request->gender,
                    'bio' => $request->bio,
                ]);

            $userdetail = Userdetail::where('user_id',$user->id)->orWhere('ip',$request->ip)->first();
            // $request->user_id = $userdetail->id;


            if($userdetail):
                $this->updateUserdetail($user,$request);
            else:
                $this->userdetail($user = null,$request);
            endif;

        endif;

        if($request->has('finish')){
            Auth::login($user);
        }

    }

    /**
     * Update user if his Ip/Remote Address does match.
     * $user is actually found user from Model
     * $date is actually request request which recieved from Form
     *
     * @param  array  $user,$request
     * @return $user
     */

    private function updateUserdetail($user,$request)
    {
        // dd($user->userdetailIp->first());
        $docs = [];
        if($request->hasFile('upload')){
            foreach($request->upload as $upload){
                $path = 'docs/'.$upload->getClientOriginalName();
                Storage::disk('local')->put($path,$upload->getClientOriginalName());
                $docs =  $path;
            }
        }else{
            $docs = $user->userdetailIp[0]->docs;
        }

        // dd($user->userdetailIp[0],$request->student_level );
       return $user->userdetailIp[0]->update([
            'degree' => json_encode($request->degree) ?? $user->userdetailIp->degree,
            'major' => json_encode($request->major) ?? $user->userdetailIp->major,
            'institute' => json_encode($request->institute) ?? $user->userdetailIp->institute,
            'year' => json_encode($request->year) ?? $user->userdetailIp->year,
            'designation' => json_encode($request->designation) ?? $user->userdetailIp->designation,
            'organization' => json_encode($request->organization) ?? $user->userdetailIp->organization,
            'start_date' => json_encode($request->start_date) ?? $user->userdetailIp->start_date,
            'end_date' => json_encode($request->end_date) ?? $user->userdetailIp->end_date,
            'teach' => $request->teach ?? $user->userdetailIp->teach,
            'student_level' => $request->student_level ?? $user->userdetailIp->student_level,
            'hourly_rate' => $request->hour_rate ?? $user->userdetailIp->hourly_rate,
            'docs' => $docs,
        ]);
    }

     /**
     * Update user if his Ip/Remote Address does match.
     * $user is actually found user from Model
     * $date is actually request request which recieved from Form
     *
     * @param  array  $user,$request
     * @return $user
     */

    private function userdetail($user,$request)
    {
        $docs = [];
        if($request->hasFile('upload')){
            foreach($request->upload as $upload){
                $path = 'docs/'.$upload->getClientOriginalName();
                Storage::disk('local')->put($path,$upload->getClientOriginalName());
                $docs =  $path;
            }
        }

        // dd($request->all());

        return  Userdetail::create([
                    'user_id' => $user->id,
                    'ip' => $_SERVER['REMOTE_ADDR'],
                    'degree' => $request->degree,
                    'major' => $request->major,
                    'institute' => $request->institute,
                    'year' => $request->year,
                    'designation' => $request->designation,
                    'organization' => $request->organization,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date,
                    'teach' => $request->teach,
                    'student_level' => $request->student_level,
                    'hourly_rate' => $request->hour_rate,
                    'docs' => $docs,
                ]);


    }

     /**
     * Update user if his Ip/Remote Address does match.
     * $user is actually found user from Model
     * $date is actually request request which recieved from Form
     *
     * @param  array  $user,$request
     * @return $user
     */

    private function updateUser($user,$request)
    {

        /**
         *  Update request in User Model
         */

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->ip = $request->ip;
        $user->dob = $request->dob;
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->country_short = $request->country_short;
        $user->role = $request->role;
        $user->type = ($request->type == 1) ? 'cnic' : 'security';
        $user->cnic_security = $request->cnic ?? $request->security;
        $user->language = $request->language;
        $user->gender = $request->gender;
        $user->bio = $request->bio;
        $user->save();

        return $user;
    }
}
