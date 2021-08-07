<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
