<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        
        $bookings = DB::table("bookings")->where('status', 2)->get();

        foreach($bookings as $booking) {

            if($booking->class_time != null) {
                $date = Carbon::create($booking->class_time );
                if($date->addMinutes(15)) {
                    $check_tutor = DB::table("class_room_logs")->where('tutor_join_time',NULL)->get();
                    if($check_tutor) {
                        DB::table("bookings")->where('id',$booking->id)->update([
                            "status" => 6,
                        ]);
                    }else{
                        $check_student = DB::table("class_room_logs")->where('student_join_time',NULL)->get();
                        if($check_student) {
                            DB::table("bookings")->where('id',$booking->id)->update([
                                "status" => 5,
                            ]);
                        }                      
                    }
                }else{

                }
            }
        }

    }
}
