<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{

    public function index($id)
    {
        return view('tutor.test',compact('id'));
    }
}
