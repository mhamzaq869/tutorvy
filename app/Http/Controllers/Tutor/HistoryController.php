<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\tktCat;
use App\Models\Activitylogs;
use Illuminate\Support\Facades\URL;
use App\Models\Admin\supportTkts;

class HistoryController extends Controller
{
    /**
     *  Return Tutor History view
     */

    public function index(){
        $tickets = supportTkts::where('user_id',Auth::user()->id)->with(['category','tkt_created_by'])->get();
        return view('tutor.pages.history.index' ,compact('tickets'));
    }
}
