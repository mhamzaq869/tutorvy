<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\tktCat;
use App\Models\Activitylogs;
use Illuminate\Support\Facades\URL;
use App\Models\Admin\supportTkts;
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249

class HistoryController extends Controller
{
    /**
     *  Return Tutor History view
     */

    public function index(){
<<<<<<< HEAD
        return view('tutor.pages.history.index');
=======
        $tickets = supportTkts::where('user_id',Auth::user()->id)->with(['category','tkt_created_by'])->get();
        return view('tutor.pages.history.index' ,compact('tickets'));
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
    }
}
