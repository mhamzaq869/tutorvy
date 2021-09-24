<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Activitylogs;
use App\Models\Admin\supportTkts;
use App\Models\Admin\tktCat;
use App\Events\NewNotification;
use App\Models\User;

class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Admin Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles admin dashboard and other view pages as
    | well.
    |
    */
    
    public function index()
    {

        //event(new NewNotification('Hello this is test mesage'));
        $tutors_count = User::where('role',2)->count();
        $students_count = User::where('role',3)->count();
    
        $all_users = User::where('role','!=',1)->count();

        $new_requests = DB::table('users')
        ->select('users.*','assessments.id as assessment_id','assessments.status as assessment_status','subjects.name as subject_name')
        ->leftJoin('assessments', 'users.id', '=', 'assessments.user_id')
        ->leftJoin('subjects', 'subjects.id', '=', 'assessments.subject_id')    
        // ->where('assessments.status','!=',1)
        ->where('users.role',2)
        ->whereIn('users.status', [0, 1, 2])
        ->paginate(5);

        $activity_logs = Activitylogs::paginate(5);
        $tickets = supportTkts::with(['category','tkt_created_by'])->get();

        return view('admin.dashboard',compact('tutors_count','students_count','all_users','new_requests','tickets','activity_logs'));
    }
}
