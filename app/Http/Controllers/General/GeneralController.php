<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\General\Institute;
use Illuminate\Support\Facades\Auth;
class GeneralController extends Controller
{


    public function university(Request $request)
    {

        // $result = Http::get('http://universities.hipolabs.com/search',[
        //     "name" => ""
        // ]);

        $result = Institute::select('name')->get();
        return response($result,200);
        // ini_set('max_execution_time', 780);
        // $result = Http::get('http://universities.hipolabs.com/search',[
        //     "name" => ""
        // ]);

        // $data = json_decode($result);
        // foreach($data as $uni){
        //     $name = $uni->name;
        //     $country = $uni->country;
        //     $country_code = $uni->alpha_two_code;
        //     $domain = $uni->domains[0];

        //     $inst = Institute::create([
        //         'name' => $name,
        //         'country' => $country,
        //         'country_code' => $country_code,
        //         'inst_domain' => $domain

        //     ]);
        // }
        // return $data;
    }


    public function isEmailTaken(Request $request)
    {

        $user = User::where('email',$request->email)->count();

        if($user == 1){
            return true;
        }
    }



    public function loginOnRole(Request $request)
    {
        // dd($request->all());

        if($request->has('student')):
            User::find(Auth::user()->id)->update([
                'role' => 3,
                'status' => 1
            ]);

            return redirect()->route('student.dashboard');
        elseif($request->has('tutor')):
            User::find(Auth::user()->id)->update([
                'role' => 2,
                'status' => 1
            ]);

            return redirect()->route('tutor.dashboard');
        endif;

        return redirect()->back();
    }
}
