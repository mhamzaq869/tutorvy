<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\tktCat;
use App\Models\Admin\supportTkts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SupportController extends Controller
{
    public function index()
    {
        $tickets = supportTkts::with(['category','tkt_created_by'])->get();
        return view('admin.pages.support.index',compact('tickets'));
    }
    public function category()
    {
        $categories = tktCat::all();
        return view('admin.pages.support.category',compact('categories'));
    }
    public function ticket($id) {
        $ticket = supportTkts::where('ticket_no',$id)->with(['category','tkt_created_by'])->first();
        return view('admin.pages.support.ticket',compact('ticket'));
    }
    public function ticketReply()
    {
        return view('admin.pages.support.ticketReply');
    }

    // save category
    public function saveCategory(Request $request) {

        if($request->id == '') {
            $data = tktCat::create(["title" => $request->title]);
            $message = 'Added';
        }else{
            tktCat::where('id',$request->id)->update(["title" => $request->title]);
            $message = 'Updated';
        }
        
        return response()->json([
            'status_code'=> 200,
            'message' => 'Category '.$message.' Successfully',
            'success' => true,
            'id' => $request->id == '' ? $data->id : $request->id,
            'response' => $message,
        ]);
    }

    // delete category
    public function deleteCategory(Request $request) {
        tktCat::where('id',$request->id)->delete();
        return response()->json([
            'status_code'=> 200,
            'message' => 'Category Deleted Successfully',
            'success' => true,
        ]);
    }
}
