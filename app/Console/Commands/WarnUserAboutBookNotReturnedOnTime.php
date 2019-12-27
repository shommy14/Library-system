<?php

namespace App\Console\Commands;

use App\Borrow;
use App\Notifications\WarningBookNotReturned;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Notification;

class WarnUserAboutBookNotReturnedOnTime extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'book:warning';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Warn users that have not returned book and due date expired.';

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
     * @return mixed
     */
    public function handle()
    {
        $usersId = Borrow::where('returned', '=', 0)->whereDate('dueDate','<',Carbon::now())->pluck('userId');
        $users = User::findMany($usersId->toArray());
       /* dd($users);*/
        Notification::send($users, new WarningBookNotReturned());
    }
}
