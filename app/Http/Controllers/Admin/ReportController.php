<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Admin -- ReportController
    |--------------------------------------------------------------------------
    |
    | This controller handles Revenue Reports from admin side
    |
    |
    */

    public function index()
    {
        return view('admin.pages.reports.index');
    }
}
