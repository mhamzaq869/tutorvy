<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Activitylogs;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Carbon;
class PaymentController extends Controller
{
    /**
     *  Return Tutor Payment view
     */

    public function index(){
        $payment = Booking::with(['user','subject'])->where('booked_tutor',Auth::user()->id)->whereIn('status',['2','5'])->get();
        return view('tutor.pages.payment.index',compact('payment'));
    }


    /**
     * @param Request $request
     *
     */

    public function paypalConfigure(Request $request)
    {

        DB::table('payment_methods')->insert([
            'user_id' => Auth::user()->id,
            'email' => $request->email,
            'method' => 'paypal',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect()->back()->with('success','Your Paypal account successfully added');

    }


    public function delPayMethod(Request $request)
    {
        try{
            $del = DB::table('payment_methods')->where('id',$request->id)->delete();
            return response()->json('success');
        }
        catch(\Exception $e){
            return response()->json('error');
        }

    }
}
