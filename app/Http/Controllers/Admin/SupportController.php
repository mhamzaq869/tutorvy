<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index()
    {
        return view('admin.pages.support.index');
    }
    public function category()
    {
        return view('admin.pages.support.category');
    }
    public function ticket()
    {
        return view('admin.pages.support.ticket');
    }
    public function ticketReply()
    {
        return view('admin.pages.support.ticketReply');
    }
}
