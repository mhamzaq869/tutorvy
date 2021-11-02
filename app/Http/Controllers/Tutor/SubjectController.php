<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

        $subjects = Subject::where('category_id',1)->get();
        $main_sub = SubjectCategory::all();
        return view('tutor.pages.subject.index',compact('subjects','main_sub'));
    }

    public function destroy($id)
    {
        $assessmet = Assessment::where('subject_id',$id)->where('user_id',Auth::user()->id)->first();
        $assessmet->delete();

        return redirect()->back();
    }
    public function review(){

        return view('tutor.pages.reviews.index');
    }

    public function displaySub($id){
        $subjects = Subject::where('category_id',$id)->get();
        return response()->json($subjects);
    }
}
