<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Integration;

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

    public function index() {

        $paypal = [];
        $paypal_data =Integration::where('name','Paypal')->first();

        if($paypal_data) {
            $key = json_decode($paypal_data->key);
            array_push($paypal, ["client_id" => $key->client_id , "secret_key" => $key->secret_key , "type" => $key->type , "key_type" => $paypal_data->key_type , "status" =>  $paypal_data->status]);
        }
        
        return view('admin.pages.integrations.index', compact('paypal'));
    }

    public function savePaypalDetails(Request $request) {

        $integration = Integration::where('name','Paypal')->first();
        $data = array([
            "name" => $request->name,
            "key" => $request->key,
            "key_type" => $request->key_type,
        ]);

        if(empty($integration)) {
            DB::table("integration")->insert($data);
        }else{
            $integration->name = $request->name;
            $integration->key = $request->key;
            $integration->key_type = $request->key_type;
            $integration->save();
        }

        return response()->json([
            "status_code" => 200,
            "success" => true,
            "message" => "Data Saved Successfully",
        ]);   
    }

    public function verfiyIntegration(Request $request) {

        if($request->name == 'google') {

            $integration = Integration::where('name',$request->name)->first();
            $data = array([
                "name" => $request->name,
                "key" => $request->api_key,
                "status" => 1,
                "key_type" => 1,
            ]);
    
            if( empty($integration) ) {
                DB::table("integration")->insert($data);
            }else{
                $integration->name = $request->name;
                $integration->key = $request->api_key;
                $integration->save();
            }

        }

        return response()->json([
            "status_code" => 200,
            "success" => true,
            "message" => "Verfiication Done Successfully",
        ]);   

    }

    public function changeIntegrationStatus(Request $request) {

        Integration::where('name',$request->name)->update([
            "status" => $request->status,
        ]);

        return response()->json([
            "status_code" => 200,
            "success" => true,
            "message" => "Data Saved Successfully",
        ]);

    }


}
