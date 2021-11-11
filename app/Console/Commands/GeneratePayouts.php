<?php

namespace App\Console\Commands;

use App\Models\Wallet;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GeneratePayouts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:payouts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command generate payouts and update status of payouts';

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
    public function handle()
    {
        $sys = DB::table("sys_settings")->first();
        $wallets = Wallet::where('type','pen')
                            ->where('created_at','>=',DB::raw('DATE_SUB(CURDATE(), INTERVAL '.$sys->clearence_days.' DAY)'))
                            ->get();

       foreach($wallets as $wt){
           $wt->type = 'cleared';
           $wt->save();
       }

       $this->info('Payouts generated or updated successfully!');
    }
}
