<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
<<<<<<< HEAD
        //
=======
        Commands\checkClassStaus::class,
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
<<<<<<< HEAD
=======
        // $schedule->command('generate:payouts')->everyMinute();
        $schedule->command('command:check_class_status')->everyMinute();
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
