<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class NotifyController extends Controller
{

    public function GeneralNotifi($receiver,$slug,$type,$title,$icon,$class,$desc,$pic){

        $notify = new Notification;
        $notify->receiver_id = $receiver;
        $notify->slug = $slug;
        $notify->noti_type = $type;
        $notify->noti_title = $title;
        $notify->noti_icon = $icon;
        $notify->btn_class = $class;
        $notify->noti_desc = $desc;
        $notify->sender_pic = $pic;
  
        if($notify->save()){
          // $notify->toMultiDevice($receiver,$title,$desc, $type ,$slug ,$icon,$class);
          $notify->toMultiDevice($receiver,$slug,$type,$title,$icon,$class,$desc,$pic);

        }
    }

    function getAllNotification(Request $request) {
      
      $notifications = Notification::orderBy('id','desc')->where('receiver_id',\Auth::user()->id)->where('read_at',NULL)->get();
     
      $response['message'] = 'Notification List';
      $response['status_code'] = 200;
      $response['success'] = true;
      $response['data'] = $notifications;
      
      return response()->json($response);
    }

    public function markAllRead(){
      $id = Auth::user()->id; 
      $notification =  Notification::where('receiver_id', $id)->update(['read_at' => Carbon::now()]);

      $response['message'] = "Success Message";
      $response['status_code'] = 200;
      $response['success'] = true;
      return response()->json($response);
    }

    public function saveToken(Request $request) {

      $user = User::where("id", Auth::user()->id)->first();

      if ($user->token != NULL && $user->token != '') {
          $fcm_array = json_decode($user->token);
          $token = $request->token;
          $entry = current(array_filter($fcm_array, function ($e) use ($token) {
              return $e->token == $token;
          }));
          Session::put('unnid',$token);
         
          if ($entry === false) {
            if($user->role == 1){
              $fcm_data = array();
              $fcm_data['token'] = $request->token;
              $fcm_data['device'] = 'Windows';
              array_push($fcm_array, $fcm_data);
              $user->token = $fcm_data;
              $user->token_updated_at = date('Y-m-d h:m:s');                
              $user->is_token_updated = 1;
              $user->save();
            }else{
              $fcm_data = array();
              $fcm_data['token'] = $request->token;
              $fcm_data['device'] = 'Windows';
              array_push($fcm_array, $fcm_data);
              $user->token = $fcm_array;
              $user->token_updated_at = date('Y-m-d h:m:s');                
              $user->is_token_updated = 1;
              $user->save();
            }
              
          }
      }else{
          Session::put('unnid',$request->token);

          $fcm_data = array();
          $fcm_array = array();
          $fcm_data['token'] = $request->token;
          $fcm_data['device'] = 'Windows';
          array_push($fcm_array, $fcm_data);            
          $user->token = json_encode($fcm_array);
          $user->token_updated_at = date('Y-m-d h:m:s');
          $user->is_token_updated = 1;
          $user->save();
      }
    }

}
