<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     *  Return Tutor Profile view
     */

    public function index(){
        return view('tutor.pages.profile.index');
    }
}
