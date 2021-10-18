<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\General\Degree;
use App\Models\General\Institute;
use App\Models\Admin\Subject;
use App\Models\Admin\SubjectCategory;
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
use Illuminate\Support\Facades\Session;

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
    public function validate_email(Request $request)
    {
        $users = User::where('email',$request->email)->first();
        if($users){
            return "Trust me";
        }
        else{
                return "Don't trust me";
        }
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
        $user = User::with(['education','professional'])->where('ip',$_SERVER['REMOTE_ADDR'])->first();
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
        $degrees = Degree::all();
        $subjects = Subject::all();
        $subject_cat = SubjectCategory::all();

        return view('student.pages.register',compact('user','degrees','subjects','subject_cat'));
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

        $region =  substr($request->region ,25,50);
        $account_id = mt_rand(100000,999999);

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255','unique:users'],
            'password' => ['required', 'string', 'min:8']

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
            'account_id' => $account_id,
            'region' =>  $region,
            'time_zone' =>  $request->time_zone,
            // 'dob' => $request->dob,
            // 'phone' => $request->phone,
            // 'city' => $request->city,
            // 'country' => $request->country,
            // 'country_short' => $request->country_short,
            'role' => $request->role,
            // 'type' => ($request->type == 1) ? 'cnic' : 'security',
            // 'cnic_security' => $request->cnic ?? $request->security,
            // 'language' => $request->language,
            // 'lang_short' => $request->lang_short,
            // 'student_level' => $request->student_level,
            // 'std_grade' => $request->student_grade,
            // 'hourly_rate' => $request->hour_rate,
            // 'policies' => $request->policies,
            // 'email_market' => $request->email_market,
            // 'gender' => $request->gender,
            // 'bio' => $request->bio,
            ]);
        else:
            // return $request;
            // return "Null";
        //   $user = $this->registerStudent($request);
        $user = User::updateOrCreate(["email" => $request->email],[
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'account_id' => $account_id,
            'region' =>  $region,
            'time_zone' =>  $request->time_zone,
            // 'ip' => $request->ip,
            // 'dob' => $request->dob,
            // 'phone' => $request->phone,
            // 'city' => $request->city,
            // 'country' => $request->country,
            // 'country_short' => $request->country_short,
            'role' => $request->role,
            // 'type' => ($request->type == 1) ? 'cnic' : 'security',
            // 'cnic_security' => $request->cnic ?? $request->security,
            // 'language' => $request->language,
            // 'lang_short' => $request->lang_short,
            // 'student_level' => $request->student_level,
            // 'std_grade' => $request->student_grade,
            // 'hourly_rate' => $request->hour_rate,
            // 'policies' => $request->policies,
            // 'email_market' => $request->email_market,
            // 'gender' => $request->gender,
            // 'bio' => $request->bio,
            ]);


        endif;

        /**
         * Userdetail Model/Table is only for Tutor , so here is checking ( 2 represent tutor)
         * if tutor is registering himself then it will create userdetail
         */

        // if($request->role == 2):
        //     $this->updateOrCreatedetail($user,$request);
        // endif;

        /**
         * if Tutor complete his 4 steps in registeration form then name attribute
         * append on submit button to identify his step completion/visited
         */


        if($request->has('finish')){
        // return $request;
            Auth::login($user);

            User::find(Auth::user()->id)->update(['ip' => null,'status' => 0]);

            if(Auth::user()->role == 2):
                return redirect()->route('tutor.dashboard');


                // return view('tutor.skip',compact('request'));
            else:

                if(Session::get('redirectUrlCourse')){
                    return redirect()->route('student.course-details',[Session::get('redirectUrlCourse')]);
                    Session::flush(Session::get('redirectUrlCourse'));
                }

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

        $docs = [];
        $docss = Education::where('user_id',$user->id)->get();

        if($request->has('exist_img')){
            foreach($request->exist_img as $img){
                if($img != null){
                    array_push($docs,$img);
                }
            }
        }
        if($request->hasFile('upload')){
            foreach($request->upload as $i => $upload){
                $path = 'storage/docs/'.$upload->getClientOriginalName();
                $upload->storeAs('docs',$upload->getClientOriginalName(),'public');
                array_push($docs,$path);
            }
        }

        // dd($docs,$docss);
        if($user->education){
            $user->education->each(function($record) {
                $record->delete(); // <-- direct deletion
             });
        }

        // if($user->professional)
        // {
        //     $user->professional->each(function($data){
        //         $data->delete();
        //     });
        // }
// return $request->degree;
        // for($i=0; $i<count($request->degree); $i++){
        //     Education::updateOrCreate([
        //         "user_id" => $user->id,
        //         "degree_id" => $request->degree[$i],
        //         "subject_id" => $request->major[$i],
        //         "institute_id" => $request->institute[$i],
        //         "year" => $request->graduate_year[$i],
        //         "docs" => $docs[$i] ?? '',
        //     ]);
        // }


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
                    // 'ip' => $request->ip,
                    // 'dob' => $request->dob,
                    // 'phone' => $request->phone,
                    // 'city' => $request->city,
                    // 'country' => $request->country,
                    // 'country_short' => $request->country_short,
                    'role' => $request->role,
                    // 'type' => ($request->type == 1) ? 'cnic' : 'security',
                    // 'cnic_security' => $request->cnic ?? $request->security,
                    // 'language' => $request->language,
                    // 'lang_short' => $request->lang_short,
                    // 'std_degree' => $request->degree,
                    // 'std_grade' => $request->std_grade,
                    // 'std_subj' => $request->std_subj,
                    // 'std_learn' => $request->std_learn,
                    // 'bio' => $request->bio,
                ],['id','email'],['ip']);

        }

}
