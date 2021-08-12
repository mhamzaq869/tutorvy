<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
class GeneralController extends Controller
{


    public function university(Request $request)
    {

        $result = Http::get('http://universities.hipolabs.com/search',[
            "name" => ""
        ]);

        $data = json_decode($result);
        dd($data);
        return $data;
    }


    public function isEmailTaken(Request $request)
    {

        $user = User::where('email',$request->email)->count();

        if($user == 1){
            return true;
        }
    }
}
