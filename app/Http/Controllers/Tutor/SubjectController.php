<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use App\Models\Activitylogs;
use App\Models\Admin\SubjectCategory;
use App\Models\Admin\Subject;
use App\Models\Assessment;

class SubjectController extends Controller
{
    /**
     *  Return Tutor Subject view
     */

    public function index(){

        $subjects = Subject::paginate(15);
        return view('tutor.pages.subject.index',compact('subjects'));
    }

    public function destroy($id)
    {
        $assessmet = Assessment::where('subject_id',$id)->where('user_id',Auth::user()->id)->first();
        $assessmet->delete();

        return redirect()->back();
    }
}
