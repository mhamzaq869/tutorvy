<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\General\Degree;
use App\Models\General\Institute;
use App\Models\Admin\Subject;
use App\Models\General\Education;
use App\Models\General\Professional;
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
        $user = User::with(['education','professional','userdetail'])->where('ip',$_SERVER['REMOTE_ADDR'])->first();
        $subjects = Subject::all();
        $degrees = Degree::all();
        $institutes = Institute::select('name','id')->get();


        return view('tutor.register',compact('user','subjects','degrees','institutes'));
    }

    /**
     * Show Registeration Form of Tutor and return User data
     * which matched with his Remote Address
     *
     */
    protected function showStudentRegistrationForm()
    {
        $user = User::where('ip',$_SERVER['REMOTE_ADDR'])->first();

        return view('student.auth.register',compact('user'));
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
        dd($request->all());

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['required'],
            'gender' => ['r  equired'],
        ]);
        $request->ip = $_SERVER['REMOTE_ADDR'];
        $request->dob = $request->year.'-'.$request->month.'-'.$request->day;

        /**
         * Identify user already exist
         */

        if($request->role == 2):
            $user = User::updateOrCreate(["email" => $request->email,"ip" => $request->ip],[
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
            'lang_short' => $request->lang_short,
            'gender' => $request->gender,
            'bio' => $request->bio,
            ]);
        else:
          $user = $this->registerStudent($request);
        endif;

        /**
         * Userdetail Model/Table is only for Tutor , so here is checking ( 2 represent tutor)
         * if tutor is registering himself then it will create userdetail
         */

        if($request->role == 2):
            $this->updateOrCreatedetail($user,$request);
        endif;

        /**
         * if Tutor complete his 4 steps in registeration form then name attribute
         * append on submit button to identify his step completion/visited
         */


        if($request->has('finish')){

            Auth::login($user);

            User::find(Auth::user()->id)->update(['ip' => null,'status' => 1]);
            Userdetail::where('user_id',Auth::user()->id)->update(['ip' => null]);

            if(Auth::user()->role == 2):
                return view('tutor.skip',compact('request'));
            else:
                return redirect()->route('student.dashboard');
            endif;

        }

        return redirect()->back();

    }

    /**
     * Update user if his Ip/Remote Address does match.
     * $user is actually found user from Model
     * $date is actually request request which recieved from Form
     *
     * @param  array  $user,$request
     * @return $user
     */

    private function updateOrCreatedetail($user,$request)
    {
        Userdetail::upsert([
            'user_id' => $user->id,
            'ip' => $request->ip,
            'student_level' => $request->student_level,
            'hourly_rate' => $request->hour_rate,
        ],['user_id']);

        $docs = [];
        if($request->hasFile('upload')){
            foreach($request->upload as $upload){
                $path = 'storage/docs/'.$upload->getClientOriginalName();
                $upload->storeAs('docs',$upload->getClientOriginalName(),'public');
                $docs[] =  $path;
            }
        }else{
            $docss = Education::where('user_id',$user->id)->get();
            foreach($docss as $upload){
                $docs[] =  $upload->docs;
            }
        }

        if($user->education){
            $user->education->each(function($record) {
                $record->delete(); // <-- direct deletion
             });
        }

        if($user->professional)
        {
            $user->professional->each(function($data){
                $data->delete();
            });
        }

        for($i=0; $i<count($request->degree); $i++){

            Education::updateOrCreate([
                "user_id" => $user->id,
                "degree_id" => $request->degree[$i],
                "subject_id" => $request->major[$i],
                "institute_id" => $request->institute[$i],
                "year" => $request->graduate_year[$i],
                "docs" => $docs[$i],
            ]);
        }


        if($request->filled('designation')){
            for($i=0; $i<count($request->designation); $i++){
                Professional::updateOrCreate([
                    'user_id' => $user->id,
                    'designation' => $request->designation[$i],
                    'organization' => $request->organization[$i],
                    'start_date' => $request->degree_start[$i],
                    'end_date' => $request->degree_end[$i],
                ]);
            }
        }


    }


    private function registerStudent($request)
    {
        return User::updateOrCreate([
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
                'lang_short' => $request->lang_short,
                'gender' => $request->gender,
                'bio' => $request->bio,
            ],['id','email'],['ip']);

    }

}
