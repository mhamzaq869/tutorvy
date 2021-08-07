<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     *  Return Tutor Subject view
     */

    public function index(){
        return view('tutor.pages.subject.index');
    }
}
