<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\SubjectCategory;
class SubjectController extends Controller
{
    /**
     *  Return Tutor Subject view
     */

    public function index(){
        return view('tutor.pages.subject.index');
    }
}
