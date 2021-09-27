<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
     /*
    |--------------------------------------------------------------------------
    | Admin -- SubjectController
    |--------------------------------------------------------------------------
    |
    | This controller handles Subject from admin side
    |
    |
    */
    public function index()
    {
        return view('admin.pages.website.index');
    }
}
