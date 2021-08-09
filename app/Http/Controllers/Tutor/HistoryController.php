<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     *  Return Tutor History view
     */

    public function index(){
        return view('tutor.pages.history.index');
    }
}
