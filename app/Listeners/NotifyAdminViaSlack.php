<?php

namespace App\Listeners;

use App\Admin;
use App\Events\NewCustomerHasRegisteredEvent;
use App\Notifications\AdminSlackMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class NotifyAdminViaSlack implements ShouldQueue
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
     * @param  NewCustomerHasRegisteredEvent  $event
     * @return void
     */
    public function handle(NewCustomerHasRegisteredEvent $event)
    {
        $admins = Admin::all();
        Notification::send($admins, new AdminSlackMessage());
    }
}
