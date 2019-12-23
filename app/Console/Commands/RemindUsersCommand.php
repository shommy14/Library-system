<?php

namespace App\Console\Commands;

use App\Borrow;
use App\Notifications\RemindUserAboutBookDueDate;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Carbon;

class RemindUsersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'book:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remind users about book due date';

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
        $usersId = Borrow::where('returned', '=', 0)->whereDate('dueDate','>',Carbon::now())->pluck('userId');
        $users = User::findMany($usersId->toArray());
        Notification::send($users, new RemindUserAboutBookDueDate());
    }
}
