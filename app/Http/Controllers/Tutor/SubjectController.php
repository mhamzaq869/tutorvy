<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\SubjectCategory;
use App\Models\Admin\Subject;
class SubjectController extends Controller
{
    /**
     *  Return Tutor Subject view
     */

    public function index(){

        $subjects = Subject::paginate(10);
        return view('tutor.pages.subject.index',compact('subjects'));
    }
}
