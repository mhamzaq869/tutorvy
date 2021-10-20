<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Activitylogs;
use App\Models\User;
use App\Models\Admin\sys_settings;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){

        // $user = User::where('id',\Auth::user()->id)->first();
        $setting = sys_settings::where('user_id',Auth::user()->id)->first();
        return view('admin.pages.setting.index',compact('setting'));
    }

    public function changePassword(Request $request) {

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'new_confirm_password' => 'required',
        ]);

        if($request->new_password != $request->new_confirm_password) {
            return response()->json([
                "status_code" => 500,
                "success" => false,
                "message" => "Password not matched!",
            ]);
        }else{
            if(Hash::check($request->current_password, \Auth::user()->password)) {

                User::find(\Auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

                return response()->json([
                    "status_code" => 200,
                    "success" => true,
                    "message" => "Password change successfully",
                ]);

            }else{
                return response()->json([
                    "status_code" => 500,
                    "success" => false,
                    "message" => "You have entered wrong password!",
                ]);
            }
        }
    }


    public function saveSystemSetting(Request $request) {

        $setting = sys_settings::where('user_id',Auth::user()->id)->first();

        $data = array(
            "user_id" => Auth::user()->id,
            "title" => $request->title,
            "commission" => $request->commission,
            "clearence_days" => $request->clearence_days,
            // "logo" => $request->hasFile('logo') ?? $images[0]  ,
            // "favicon" => $request->hasFile('favicon') ?? $images[1],
        );


        if($request->hasFile('logo')){
            $filename = 'storage/setting/'.$request->logo->getClientOriginalName();
            $data['logo'] = $filename;
            $request->logo->storeAs('setting',$request->logo->getClientOriginalName(),'public');
        }

        if($request->hasFile('favicon')){
            $filename = 'storage/setting/'.$request->favicon->getClientOriginalName();
            $data['favicon'] = $filename;
            $request->favicon->storeAs('setting',$request->favicon->getClientOriginalName(),'public');
        }



        if (empty($setting)) {
            sys_settings::create($data);
        }else{
            sys_settings::where('user_id',Auth::user()->id)->update($data);
        }


        return response()->json([
            "status_code" => 200,
            "success" => true,
            "message" => "Setting saved successfully",
        ]);


    }


    public function saveProfile(Request $request) {

        $data = array(
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "phone" => $request->phone,
            "city" => $request->address,
            "country" => $request->country,
        );


        User::where("id",$request->user_id)->update($data);
        return redirect()->back()->with(['success' => 'Profile Updated Successfully']);
    }

    public function activityLogs() {
        $activity_logs = Activitylogs::paginate(15);
        return view('admin.pages.activity_logs.index',compact('activity_logs'));
    }

}
