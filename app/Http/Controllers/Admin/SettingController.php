<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){

        // $user = User::where('id',\Auth::user()->id)->first();
        return view('admin.pages.setting.index');
    }

}
