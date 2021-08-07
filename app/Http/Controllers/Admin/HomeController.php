<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Admin Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles admin dashboard and other view pages as
    | well.
    |
    */
    
    public function index()
    {
        return view('admin.dashboard');
    }
}
