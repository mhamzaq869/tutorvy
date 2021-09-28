<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
     /*
    |--------------------------------------------------------------------------
    | Admin -- StudentController
    |--------------------------------------------------------------------------
    |
    | This controller handles Student from admin side
    |
    |
    */

    public function index()
    {
        $students = User::where('role',3)->paginate(15);
        return view('admin.pages.students.index',compact('students'));
    }

    public function profile($id){

        $student = User::where('role',3)->where('id',$id)->first();
        return view('admin.pages.students.profile',compact('student'));

    }
    public function studentStatus(Request $request){

        $student = User::where('id',$request->id)->first();
        $student->status = $request->status;
        $student->reject_note = $request->reason;
        $student->save();

        $message = '';
        if($request->status == 1){
            $message = 'Student Status Enabled.';
        }elseif($request->status == 0){
            $message = 'Student Status Disabled.';
        }

        return response()->json([
            'status'=>'200',
            'message' => $message
        ]);

    }

    public function deleteStudent(Request $request){
      
        $student = User::where('id',$request->id)->delete();
        return response()->json([
            'status'=>'200',
            'message' => 'Student Deleted successfully'
        ]);

    }
}
