<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\General\NotifyController;
use Carbon\Carbon;

class checkClassStaus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:check_class_status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() {
        
        $bookings = DB::table("bookings")->where('status', 2)->where('class_date',date('Y-m-d'))->get();
       

        foreach($bookings as $booking) {
            
            $class = DB::table("classroom")->where('booking_id',$booking->id)->first();
            $class_log = DB::table("class_room_logs")->where('class_room_id',$class->id)->first();

            if($booking->class_time != null) {
                
                $date = Carbon::create($booking->class_time );

                // $time_check = $date->addMinutes(15);
                $now = Carbon::create(Carbon::now());
                // return $now->toDateTimeString();
                // return Carbon::parse($now . '  America/Chicago')->tz('UTC');
                // return $now;
                // return $date->lte($now);

                if($time_check->lte($now)) {
                    
                    if($class_log != '') {
                        
                        if($class_log->tutor_join_time != NULL){
                            if($class_log->student_join_time == NULL) {
                                DB::table("bookings")->where('id',$booking->id)->update([
                                    "status" => 5,
                                ]);
                            }
                        }else{
                            DB::table("bookings")->where('id',$booking->id)->update([
                                "status" => 6,
                            ]);
                        }

                        // $admin = User::where('role',1)->first();
                        // $notification = new NotifyController();
                        // $sender_id = $booking->user_id;
                        // $reciever_id = $reciever->id;
                        // $slug = '-' ;
                        // $type = 'cancel_class';
                        // $data = 'data';
                        // $title = 'Class Cancel';
                        // $icon = 'fas fa-tag';
                        // $class = 'btn-success';
                        // $student_description = 'Class Cancelled Tutor is not available';
                        // $tutor_description ='Class Cancelled you did not join on time';
                        // $admin_description = 'Class Cancelled Tutor not join on time';

                        // $notification->GeneralNotifi(0, $sender_id , $slug ,  $type , $data , $title , $icon , $class ,$student_description);
                        // $notification->GeneralNotifi(0, $booking->booked_tutor , $slug ,  $type , $data , $title , $icon , $class ,$tutor_description);
                        // $notification->GeneralNotifi(0, $admin->id , $slug ,  $type , $data , $title , $icon , $class ,$admin_description);


                    }else{
                        DB::table("bookings")->where('id',$booking->id)->update([
                            "status" => 5,
                        ]);
                        DB::table("bookings")->where('id',$booking->id)->update([
                            "status" => 6,
                        ]);
                        // $check_student = DB::table("class_room_logs")->where('student_join_time',NULL)->get();
                        // if($check_student) {
                        //     DB::table("bookings")->where('id',$booking->id)->update([
                        //         "status" => 5,
                        //     ]);


                            // $admin = User::where('role',1)->first();
                            // $notification = new NotifyController();
                            // $sender_id = $booking->user_id;
                            // $reciever_id = $reciever->id;
                            // $slug = '-' ;
                            // $type = 'cancel_class';
                            // $data = 'data';
                            // $title = 'Class Cancel';
                            // $icon = 'fas fa-tag';
                            // $class = 'btn-success';
                            // $student_description = 'Class Cancelled your not available';
                            // $tutor_description ='Class Cancelled Student did not join on time';
                            // $admin_description = 'Class Cancelled Student did not join on time';
    
                            // $notification->GeneralNotifi(0, $sender_id , $slug ,  $type , $data , $title , $icon , $class ,$student_description);
                            // $notification->GeneralNotifi(0, $booking->booked_tutor , $slug ,  $type , $data , $title , $icon , $class ,$tutor_description);
                            // $notification->GeneralNotifi(0, $admin->id , $slug ,  $type , $data , $title , $icon , $class ,$admin_description);


                        // }


                    }



                }else{

                }
            }
        }

    }
}
