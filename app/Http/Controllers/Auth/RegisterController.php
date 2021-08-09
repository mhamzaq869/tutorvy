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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'number'],
            'gender' => ['required'],
        ]);
    }

    /**
     * Show Registeration Form of Tutor and return User data
     * which matched with his Remote Address
     *
     */
    protected function showRegistrationForm()
    {
        $user = User::where('ip',$_SERVER['REMOTE_ADDR'])->first();

        if(isset($user->dob)):
            $user->day = date('d',strtotime($user->dob));
            $user->month = date('M',strtotime($user->dob));
            $user->year = date('Y',strtotime($user->dob));
        endif;

        $this->getDecodeUserdetail($user);

        return view('tutor.register',compact('user'));
    }

    /**
     * Show Registeration Form of Tutor and return User data
     * which matched with his Remote Address
     *
     */
    protected function showStudentRegistrationForm()
    {
        $user = User::where('ip',$_SERVER['REMOTE_ADDR'])->first();

        if(isset($user->dob)):
            $user->day = date('d',strtotime($user->dob));
            $user->month = date('M',strtotime($user->dob));
            $user->year = date('Y',strtotime($user->dob));
        endif;

        return view('student.auth.register',compact('user'));
    }

     /**
     * Data is json encoded , this function is returing json
     * decoded data and retun collection $user
     *
     * @param  array  $user
     * @return array $user
     */
    private function getDecodeUserdetail($user)
    {

        if(isset($user->userdetailIp)){
            $user->degrees = json_decode($user->userdetailIp->first()->degree);
            $user->major = json_decode($user->userdetailIp->first()->major);
            $user->institute = json_decode($user->userdetailIp->first()->institute);
            $user->year = json_decode($user->userdetailIp->first()->year);
            $user->designation = json_decode($user->userdetailIp->first()->designation);
            $user->organization = json_decode($user->userdetailIp->first()->organization);
            $user->start_date = json_decode($user->userdetailIp->first()->start_date);
            $user->end_date = json_decode($user->userdetailIp->first()->end_date);
            $user->teach = $user->teach;
            $user->student_level = $user->student_level;
            $user->hourly_rate = $user->hourly_rate;
            $user->docs = json_decode($user->userdetailIp->first()->docs);
        }
        // else{
        //     $user->degrees = null;
        //     $user->major =[];
        //     $user->institute = [];
        //     $user->year = [];
        //     $user->institute = [];
        //     $user->year = [];
        //     $user->designation = [];
        //     $user->organization = [];
        //     $user->start_date = [];
        //     $user->end_date = [];
        //     $user->teach = [];
        //     $user->student_level = [];
        //     $user->hourly_rate = [];
        //     $user->docs = [];
        // }

        return $user;

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $request
     * @return \App\Models\User
     */
    protected function register(Request $request)
    {

         // Get a validator for an incoming registration request
        // from Tutor/Student Registor Form .

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['required'],
            'gender' => ['required'],
        ]);

        $request->ip = $_SERVER['REMOTE_ADDR'];
        $request->dob = $request->year.'-'.$request->month.'-'.$request->day;

        /**
         * Identify user already exist
         */

        $user = User::where('ip',$request->ip)->where('role',2)->first();

        if($user):
                $this->updateUser($user,$request);

                if($user->userdetailIp->count() != 0):
                    $this->updateUserdetail($user,$request);
                else:
                    $this->userdetail($user,$request);
                endif;
        else:
        /**
         * Create new Tutor/Student if not identified
         */
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

                /**
                 * Userdetail Model/Table is only for Tutor , so here is checking ( 2 represent tutor)
                 * if tutor is registering himself then it will create userdetail
                 */

                if($request->role == 2):
                    $userdetail = Userdetail::where('user_id',$user->id)->orWhere('ip',$request->ip)->first();

                    if($userdetail):
                        $this->updateUserdetail($user,$request);
                    else:
                        $this->userdetail($user = null,$request);
                    endif;
                endif;

        endif;
        /**
         * if Tutor complete his 4 steps in registeration form then name attribute
         * append on submit button to identify his step completion/visited
         */
        if($request->has('finish')){
            Auth::login($user);
            if(Auth::user()->role == 2):
                return redirect()->route('tutor.dashboard');
            else:
                return redirect()->route('student.dashboard');
            endif;
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
                    'degree' => json_encode($request->degree),
                    'major' => json_encode($request->major),
                    'institute' => json_encode($request->institute),
                    'year' => json_encode($request->year),
                    'designation' => json_encode($request->designation),
                    'organization' => json_encode($request->organization),
                    'start_date' => json_encode($request->start_date),
                    'end_date' => json_encode($request->end_date),
                    'teach' => $request->teach,
                    'student_level' => $request->student_level,
                    'hourly_rate' => $request->hour_rate,
                    'docs' => json_encode($docs),
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
