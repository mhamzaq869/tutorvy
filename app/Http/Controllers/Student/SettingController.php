<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Controllers\General\GeneralController;
use App\Http\Controllers\General\NotifyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\FavTutors;
use App\Models\Booking;
use App\Models\Activitylogs;
use App\Models\Classroom;
use App\Models\Admin\tktCat;
use App\Models\General\TicketChat;
use App\Models\Admin\supportTkts;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Course;
use App\Models\CourseEnrollment;
use App\Models\General\ClassTable;


class SettingController extends Controller
{
    /**
     *  Return Tutor setting view
     */

    public function index(){

        $user = User::where('id',\Auth::user()->id)->first();
        $setting = DB::table('payment_methods')->where('user_id',Auth::user()->id)->get();
        return view('student.pages.setting.index',compact('user','setting'));
    }


    public function paymentMethod(Request $request)
    {
        DB::table('payment_methods')->insert([
            'user_id' => Auth::user()->id,
            'email' => $request->email,
            'method' => $request->payment_type,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect()->back();
    }

    public function setDefaultPayment(Request $request)
    {
        $payments = DB::table('payment_methods')
                    ->where('user_id',Auth::user()->id)
                    ->where('method','!=',$request->method)->update([
                        'default' => 0
                    ]);

        $payments = DB::table('payment_methods')
                    ->where('user_id',Auth::user()->id)
                    ->where('method',$request->method)->update([
                        'default' => 1
                    ]);

        return response()->json('success');
    }

    protected function validator(array $request)
    {
        return Validator::make($request, [
            'current_password'     => 'required',
            'new_password'     => 'required|min:6',
            'new_confirm_password' => 'required|same:new_password',
        ]);
    }

    public function changePassword(Request $request){

        $data = $request->all();

        $request->validate([
            'current_password'     => 'required',
            'new_password'     => 'required|min:6',
            'new_confirm_password' => 'required|same:new_password',
        ]);

        $user = User::find(auth()->user()->id);

        if(!\Hash::check($data['current_password'], $user->password)){
            // print_r('asd');exit;
            return back()->with('error','You have entered wrong password');

        }else{
            User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

            return redirect()->back('success','Password updated');
        }

    }

    public function call(){
        $users = User::where('role',2)->get();

        return view('student.pages.classroom.call',compact('users'));
    }

    public function whiteBoard(){
        $users = User::where('role',3)->get();

        return view('student.pages.classroom.classroom',compact('users'));

    }

    public function join_class($class_room_id){
        $class = Classroom::where('classroom_id',$class_room_id)->first();
        $booking = Booking::where('id',$class->booking_id)->first();
        $user = User::where('id',\Auth::user()->id)->first();
        return view('student.pages.classroom.classroom',compact('class','user','booking'));
    }

    public function change_password(Request $request) {

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'new_confirm_password' => 'required',
        ]);

        if(Hash::check($request->current_password, \Auth::user()->password)) {

            User::find(\Auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

            // activity logs
            $id = Auth::user()->id;
            $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
            $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> Update his Password';
            $activity_logs = new GeneralController();
            $activity_logs->save_activity_logs("Password Changed", "users.id", $id, $action_perform, $request->header('User-Agent'), $id);

            return redirect()->back()->with(['success' => 'Password Change ...' , 'key' => 'password_changed']);
        }else{

            return redirect()->back()->with(['error' => 'You have entered wrong password', 'key' => 'password_changed']);

        }
    }


    public function getAllCategories() {
        $data = tktCat::all();

        return response()->json([
            "status_code" => 200,
            "categories" => $data,
        ]);

    }

    public function saveTicket(Request $request) {

        $length = 3;
        $string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $no = '1234567890';

        $ticket_no =  substr(str_shuffle($string),1,$length) . '-' . substr(str_shuffle($string),2,$length) . '-' . substr(str_shuffle($no),1,$length);

        $ticket = supportTkts::create([
            "subject" => $request->subject,
            "cat_id" => $request->category,
            "message" => $request->message,
            "user_id" => Auth::user()->id,
            "ticket_no" => $ticket_no,
        ]);

        // activity logs
        $id = Auth::user()->id;
        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;
        $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> Create a New Ticket';
        $activity_logs = new GeneralController();
        $activity_logs->save_activity_logs("Ticket Created", "support_tkts.id", $ticket->id, $action_perform, $request->header('User-Agent'), $id);

        $admin = User::where('role',1)->first();
        $notification = new NotifyController();
        $slug = '-';
        $type = 'support_ticket';
        $data = 'data';
        $title = 'Support Ticket';
        $icon = 'fas fa-tag';
        $class = 'btn-success';
        $desc = $name . ' Create a Support Ticket';
        $pic = Auth::user()->picture;

        $notification->GeneralNotifi( $admin->id , $slug ,  $type , $title , $icon , $class ,$desc,$pic);

        return response()->json([
            "status_code" => 200,
            "message" => "Ticket Created .. Our Staff will contact us soon.",
            "success" => true,
        ]);
    }


    function favouriteTutor(Request $request) {

        $tutor = User::where('id',$request->id)->first();
        $tutor_name = $tutor->first_name . ' ' . $tutor->last_name;

        // activity logs
        $id = Auth::user()->id;
        $name = Auth::user()->first_name . ' ' . Auth::user()->last_name;

        if($request->status == "fav") {

            FavTutors::create([
                "user_id" => Auth::user()->id,
                "tutor_id" => $request->id,
            ]);

            $message = 'Tutor Added in Favourite List';

            $title = 'Favourite Tutor';
            $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> Mark <a href="'.URL::to('/') . '/admin/tutor/profile/'. $id .'"> '.$tutor_name.' </a> Favourite ';


        }else{

            FavTutors::where("tutor_id",$request->id)->where("user_id",Auth::user()->id)->delete();

            $title = 'un-Favourite Tutor';
            $action_perform = '<a href="'.URL::to('/') . '/admin/student/profile/'. $id .'"> '.$name.' </a> Mark <a href="'.URL::to('/') . '/admin/tutor/profile/'. $id .'"> '.$tutor_name.' </a> Profile Un-Favourite ';

            $message = 'Tutor Removed form Favourite List';

        }

        // activity logs
        $activity_logs = new GeneralController();
        $activity_logs->save_activity_logs($title, "users.id", $request->id, $action_perform, $request->header('User-Agent'), $id);

        return response()->json([
            "status_code" => 200,
            "message" => $message,
            "success" => true,
        ]);

    }

    public function tickets($id) {
        $ticket = supportTkts::where('ticket_no',$id)->with(['category','tkt_created_by'])->first();
        $ticket_replies = TicketChat::with(['sender','receiver'])->where('ticket_id',$ticket->id)->get();
        $admin = User::where('role','1')->first();
        return view('student.pages.history.ticket_details',compact('ticket','ticket_replies','admin'));
    }

    public function ticketChat(Request $request){
        $data = $request->all();
        TicketChat::create($data);

        return response()->json([
            'status_code'=> 200,
            'message' => 'Message Sent Successfully',
            'success' => true,
            'data' => $data,
        ]);

    }
    public function courses(){
        $courses = CourseEnrollment::where('user_id',Auth::user()->id)->get();
        return view('student.pages.course.index',compact('courses'));
    }
    public function courseDetails($id){

        $course = Course::with('outline')->where('status',1)->where('id',$id)->first();
        $commission = DB::table("sys_settings")->first();

        $basic_comm = $commission->commission / 100 * $course->basic_price;
        // Basic Classes
        $basic_classes = array();

        $cr_bs_dys = json_decode($course->basic_days);
        $cr_bs_clt = json_decode($course->basic_class_title,true);
        $cr_bs_clo = json_decode($course->basic_class_overview,true);
        $cr_bs_cst = json_decode($course->basic_class_start_time,true);
        $cr_bs_cet = json_decode($course->basic_class_end_time,true);

        for($i = 0 ; $i < sizeof($cr_bs_dys) ; $i++){
            $class = new ClassTable();
            $class->day = $cr_bs_dys[$i];
            $class->st_time = $cr_bs_cst[$cr_bs_dys[$i]];
            $class->et_time = $cr_bs_cet[$cr_bs_dys[$i]];
            $class->title = $cr_bs_clt[$cr_bs_dys[$i]];
            $class->overview = $cr_bs_clo[$cr_bs_dys[$i]];

            array_push($basic_classes,$class);
        }
        $course->basic_classes = $basic_classes;
        // Standard Classes
        $standard_classes = array();
        $standard_comm = $commission->commission / 100 * $course->standard_price;

        $cr_std_dys = json_decode($course->standard_days);
        $cr_std_clt = json_decode($course->standard_class_title,true);
        $cr_std_clo = json_decode($course->standard_class_overview,true);
        $cr_std_cst = json_decode($course->standard_class_start_time,true);
        $cr_std_cet = json_decode($course->standard_class_end_time,true);
        if( $cr_std_dys != "" || $cr_std_dys != 0 ){

            for($i = 0 ; $i < sizeof($cr_std_dys) ; $i++){
                $class = new ClassTable();
                $class->day = $cr_std_dys[$i];
                $class->st_time = $cr_std_cst[$cr_std_dys[$i]];
                $class->et_time = $cr_std_cet[$cr_std_dys[$i]];
                $class->title = $cr_std_clt[$cr_std_dys[$i]];
                $class->overview = $cr_std_clo[$cr_std_dys[$i]];

                array_push($standard_classes,$class);
            }


        }
        $course->standard_classes = $standard_classes;
        // Advance Classes
        $advance_classes = array();
        $advance_comm = $commission->commission / 100 * $course->advance_price;

        $cr_ad_dys = json_decode($course->advance_days);
        $cr_ad_clt = json_decode($course->advance_class_title,true);
        $cr_ad_clo = json_decode($course->advance_class_overview,true);
        $cr_ad_cst = json_decode($course->advance_class_start_time,true);
        $cr_ad_cet = json_decode($course->advance_class_end_time,true);
        if( $cr_ad_dys != "" || $cr_ad_dys != 0 ){

            for($i = 0 ; $i < sizeof($cr_ad_dys) ; $i++){
                $class = new ClassTable();
                $class->day = $cr_ad_dys[$i];
                $class->ad_time = $cr_ad_cst[$cr_ad_dys[$i]];
                $class->et_time = $cr_ad_cet[$cr_ad_dys[$i]];
                $class->title = $cr_ad_clt[$cr_ad_dys[$i]];
                $class->overview = $cr_ad_clo[$cr_ad_dys[$i]];

                array_push($advance_classes,$class);
            }


        }
        $defaultPay = DB::table('payment_methods')->where('user_id',Auth::user()->id)->where('default',1)->first();

        // ddd($defaultPay);
        $course->advance_classes = $advance_classes;
        // return $course;
        return view('student.pages.course.course_detail',compact('course','basic_comm','standard_comm','advance_comm','commission','defaultPay'));
    }


}
