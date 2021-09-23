<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;


class NotifyController extends Controller
{

    public function GeneralNotifi($sender,$receiver,$slug,$type,$data,$title,$icon,$class,$desc){

        $notify = new Notification;
        $notify->sender_id = $sender;
        $notify->receiver_id = $receiver;
        $notify->slug = $slug;
        $notify->noti_type = $type;
        $notify->noti_data = $data;
        $notify->noti_title = $title;
        $notify->noti_icon = $icon;
        $notify->btn_class = $class;
        $notify->noti_desc = $desc;
  
        if($notify->save()){
          $notify->toMultiDevice($receiver,$title,$desc, $type ,$slug ,$icon,$class);
        }
    }

}
