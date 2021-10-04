<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KnowledgeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Admin -- KnowledgeController
    |--------------------------------------------------------------------------
    |
    | This controller handles Streaming integration from admin side
    |
    |
    */

    public function index()
    {
        return view('admin.pages.knowledge.index');
    }
}
