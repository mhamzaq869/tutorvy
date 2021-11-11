<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249

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
