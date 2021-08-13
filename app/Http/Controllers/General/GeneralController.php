<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\General\Institute;
class GeneralController extends Controller
{


    public function university(Request $request)
    {

        // $result = Http::get('http://universities.hipolabs.com/search',[
        //     "name" => ""
        // ]);

        $result = Institute::where('country_code',$request->name)->get();
        return response($result,200);
    }


    public function isEmailTaken(Request $request)
    {

        $user = User::where('email',$request->email)->count();

        if($user == 1){
            return true;
        }
    }
}
