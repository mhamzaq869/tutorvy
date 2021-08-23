<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Role;

class StaffController extends Controller
{
    public function index(){
        $users = User::whereNotIn('role', [1,2,3])->get();
        return view('admin.pages.staff.index',compact('users'));
    }
    public function role(){
        $roles = Role::all();
        return view('admin.pages.role.index',compact('roles'));
    }

    public function insertRole(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $role = Role::create([
            'name' => $request->name,
        ]);

        return response()->json([
            'status'=>'200',
            'message' => 'Role Added.'
        ]);

    
    }

    public function deleteRole(Request $request){


        $role = Role::destroy([
            'id' => $request->id,
        ]);

        return response()->json([
            'status'=>'200',
            'message' => 'Role Deleted.'
        ]);

    
    }



    public function insertStaff(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status' => 1
        ]);

        return response()->json([
            'status'=>'200',
            'message' => 'Staff Added.'
        ]);

    }

    public function staffProfile($id){
        $staff = User::where('id', $id)->first();
        return view('admin.pages.staff.profile',compact('staff'));
    }

}
