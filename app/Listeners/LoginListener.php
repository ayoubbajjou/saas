<?php

namespace App\Listeners;

use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class LoginListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $userinfo = $event->user;
        $saveHistory = DB::table('activity_log')->insert(
            [
                'log_name' =>$userinfo->name,
                'description' =>'User Login',
                'subject_type' => 'App\Models\User',
                // 'subject_type' => $userinfo->getAppNamespace(),
                'subject_id' => '2',
                'event' => 'Log In User',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        return $userinfo;
    }
}
