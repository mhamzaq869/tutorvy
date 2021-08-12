<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     *  Return Tutor setting view
     */

    public function index(){
        return view('tutor.pages.setting.index');
    }
}
