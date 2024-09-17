<?php

namespace App\Console\Commands;

use App\Models\Advertisement;
use App\Models\Material;
use Carbon\Carbon;
use App\Models\User;
use App\Models\UserPayment;
use Illuminate\Console\Command;

class UpdateUserPlan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:user-plan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set the expired plan user to be normal user';

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
        $yesterdayEndOfDay = Carbon::yesterday()->endOfDay();

        // Update all users whose plan_end was exactly at yesterday's 23:59:59
        $users = User::where('plan_end', $yesterdayEndOfDay)->get();
        foreach ($users as $user) {
            $user->plan_status = 0;
            $user->plan_start = null;
            $user->plan_end = null;
            $user->save();

            UserPayment::where('user_id', $user->id)->where('status', 1)->update(['status' => 0]);
            Material::where('user_id', $user->id)->where('status', 1)->update(['status' => 0]);
            Advertisement::where('user_id', $user->id)->where('status', 1)->update(['status' => 0]);
        }

        $this->info('Plan end dates set to null for records that ended yesterday at 23:59:59.');
    }
}
