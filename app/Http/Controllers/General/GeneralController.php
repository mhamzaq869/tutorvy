<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GeneralController extends Controller
{


    public function university(Request $request)
    {
        dd($request->all());
        $result = Http::get('http://universities.hipolabs.com/search',[
            "name" => "punjab"
        ]);

        return $result;
    }
}
