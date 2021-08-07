<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IntegrationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Admin -- IntegrationController
    |--------------------------------------------------------------------------
    |
    | This controller handles Streaming integration from admin side
    |
    |
    */

    public function index()
    {
        return view('admin.pages.integrations.index');
    }
}
