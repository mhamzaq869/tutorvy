<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\RolesPermissions;
use App\Models\Role;

class StaffController extends Controller
{
    public function index(){
        $roles = Role::whereNotIn('id', [1,2,3])->paginate(15);
        $users = User::whereNotIn('role', [1,2,3])->paginate(15);
        
        return view('admin.pages.staff.index',compact('users','roles'));
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

    public function updateRole(Request $request){
        // console.log($request->name);
        $role = Role::where('id',$request->id)->update([
            'name' => $request->name,
            
        ]);

        return response()->json([
            'status'=>'200',
            'message' => 'Role Updated.'
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


    public function rolePermission($id) {

        $sidebar_menus = [
            ["title" => "Dashboard"],
            ["title" => "Tutor"],
            ["title" => "Student"],
            ["title" => "Courses"],
            ["title" => "Subject"],
            ["title" => "Website"],
            ["title" => "Reports"],
            ["title" => "Integrations"],
            ["title" => "Staff Members"],
            ["title" => "Knowledge Base"],
            ["title" => "Support"],
            ["title" => "Activity Logs"],
            ["title" => "Settings"],
        ];


        $permissions = RolesPermissions::where('created_by',Auth::user()->id)->where('role_id',$id)->get()->toArray();
        return view('admin.pages.staff.permission',compact('sidebar_menus','id','permissions'));
    }


    public function saveRolePermission(Request $request) {

        // dd($request->all());
        // return false;
        
        $arr = [];

        ($request->Dashboard == "on") ? array_push($arr , ["title" => "Dashboard" , "Permission" => 1 , 
            "create" => ($request->create_dashboard == "on") ? 1 : 0, "read" => ($request->read_dashboard == "on") ? 1 : 0, "update" => ($request->update_dashboard == "on") ? 1 : 0, 
            "delete" => ($request->delete_dashboard == "on") ? 1 : 0,
        ]) : array_push($arr , ["title" => "Dashboard" , "Permission" => 0]);

        ($request->Tutor == "on") ? array_push($arr , ["title" => "Tutor" , "Permission" => 1,
            "create" => ($request->create_tutor == "on") ? 1 : 0, "read" => ($request->read_tutor == "on") ? 1 : 0, "update" => ($request->update_tutor == "on") ? 1 : 0, 
            "delete" => ($request->delete_tutor == "on") ? 1 : 0,
        ] ) : array_push($arr , ["title" => "Tutor" , "Permission" => 0]);

        ($request->Student == "on") ? array_push($arr , ["title" => "Student" , "Permission" => 1, 
            "create" => ($request->create_student == "on") ? 1 : 0, "read" => ($request->read_student == "on") ? 1 : 0, "update" => ($request->update_student == "on") ? 1 : 0, 
            "delete" => ($request->delete_student == "on") ? 1 : 0,
        ] ) :array_push($arr , ["title" => "Student" , "Permission" => 0]);

        ($request->Courses == "on") ? array_push($arr , ["title" => "Courses" , "Permission" => 1, 
            "create" => ($request->create_courses == "on") ? 1 : 0, "read" => ($request->read_courses == "on") ? 1 : 0, "update" => ($request->update_courses == "on") ? 1 : 0, 
            "delete" => ($request->delete_courses== "on") ? 1 : 0,
        ] ) : array_push($arr , ["title" => "Courses" , "Permission" => 0]);

        ($request->Subject == "on") ? array_push($arr , ["title" => "Subject" , "Permission" => 1, 
            "create" => ($request->create_subject == "on") ? 1 : 0, "read" => ($request->read_subject  == "on") ? 1 : 0, "update" => ($request->update_subject  == "on") ? 1 : 0, 
            "delete" => ($request->delete_subject  == "on") ? 1 : 0,
        ] ) : array_push($arr , ["title" => "Subject" , "Permission" => 0]);

        ($request->Reports == "on") ? array_push($arr , ["title" => "Reports" , "Permission" => 1, 
            "create" => ($request->create_reports == "on") ? 1 : 0, "read" => ($request->read_reports == "on") ? 1 : 0, "update" => ($request->update_reports == "on") ? 1 : 0, 
            "delete" => ($request->delete_reports == "on") ? 1 : 0,
        ] ) : array_push($arr , ["title" => "Reports" , "Permission" => 0]);

        ($request->Integrations == "on") ?  array_push($arr , ["title" => "Integrations" , "Permission" => 1, 
            "create" => ($request->create_integrations == "on") ? 1 : 0, "read" => ($request->read_integrations == "on") ? 1 : 0, "update" => ($request->update_integrations == "on") ? 1 : 0, 
            "delete" => ($request->delete_integrations == "on") ? 1 : 0,
        ] ) : array_push($arr , ["title" => "Integrations" , "Permission" => 0]);

        ($request->Staff_Members == "on") ? array_push($arr , ["title" => "Staff Members" , "Permission" => 1, 
            "create" => ($request->create_staff_members == "on") ? 1 : 0, "read" => ($request->read_staff_members == "on") ? 1 : 0, "update" => ($request->update_staff_members == "on") ? 1 : 0, 
            "delete" => ($request->delete_staff_members == "on") ? 1 : 0,
        ] ) : array_push($arr , ["title" => "Staff Members" , "Permission" => 0]);

        ($request->Knowledge_Base == "on") ? array_push($arr , ["title" => "Knowledge Base" , "Permission" => 1, 
            "create" => ($request->create_knowledge_base == "on") ? 1 : 0, "read" => ($request->read_knowledge_base == "on") ? 1 : 0, "update" => ($request->update_knowledge_base == "on") ? 1 : 0, 
            "delete" => ($request->delete_knowledge_base == "on") ? 1 : 0,
        ] ) : array_push($arr , ["title" => "Knowledge Base" , "Permission" => 0]);

        ($request->Support == "on") ? array_push($arr , ["title" => "Support" , "Permission" => 1, 
            "create" => ($request->create_support == "on") ? 1 : 0, "read" => ($request->read_support == "on") ? 1 : 0, "update" => ($request->update_support == "on") ? 1 : 0, 
            "delete" => ($request->delete_support == "on") ? 1 : 0,
        ] ) : array_push($arr , ["title" => "Support" , "Permission" => 0]);

        ($request->Activity_Logs == "on") ? array_push($arr , ["title" => "Activity Logs" , "Permission" => 1, 
            "create" => ($request->create_activity_logs == "on") ? 1 : 0, "read" => ($request->read_activity_logsd == "on") ? 1 : 0, "update" => ($request->update_activity_logs == "on") ? 1 : 0, 
            "delete" => ($request->delete_activity_logs == "on") ? 1 : 0,
        ] ) : array_push($arr , ["title" => "Activity Logs" , "Permission" => 0]);

        ($request->Settings == "on") ?  array_push($arr , ["title" => "Settings" , "Permission" => 1, 
            "create" => ($request->create_create_settings == "on") ? 1 : 0, "read" => ($request->read_create_settings == "on") ? 1 : 0, "update" => ($request->update_create_settings == "on") ? 1 : 0, 
            "delete" => ($request->delete_create_settings == "on") ? 1 : 0,
        ] ) : array_push($arr , ["title" => "Settings" , "Permission" => 0]);

        if($request->permission == 0){
    
            if($arr > 0) {
    
                for($i = 0; $i < sizeof($arr); $i++) {
    
                    RolesPermissions::create([
                        "role_id" => $request->role_id,
                        "menu_title" => $arr[$i]['title'],
                        "permission" => $arr[$i]['Permission'],
                        "create" =>  (array_key_exists("create",$arr[$i]) ? $arr[$i]['create'] : 0) ,
                        "read" => (array_key_exists("read",$arr[$i]) ? $arr[$i]['read'] : 0) ,
                        "update" => (array_key_exists("update",$arr[$i]) ? $arr[$i]['update'] : 0) ,
                        "delete" => (array_key_exists("delete",$arr[$i]) ? $arr[$i]['delete'] : 0) ,
                        "created_by" => Auth::user()->id,
                    ]);
        
                }
            }
        }else{
            RolesPermissions::where('role_id',$request->role_id)->where('created_by',Auth::user()->id)->delete();

            if($arr > 0) {
    
                for($i = 0; $i < sizeof($arr); $i++) {
    
                    RolesPermissions::create([
                        "role_id" => $request->role_id,
                        "menu_title" => $arr[$i]['title'],
                        "permission" => $arr[$i]['Permission'],
                        "create" =>  (array_key_exists("create",$arr[$i]) ? $arr[$i]['create'] : 0) ,
                        "read" => (array_key_exists("read",$arr[$i]) ? $arr[$i]['read'] : 0) ,
                        "update" => (array_key_exists("update",$arr[$i]) ? $arr[$i]['update'] : 0) ,
                        "delete" => (array_key_exists("delete",$arr[$i]) ? $arr[$i]['delete'] : 0) ,
                        "created_by" => Auth::user()->id,
                    ]);
        
                }
            }

        }

        return redirect()->back()->with(['success' => 'Permission Assign Successfully']);

    }
}
