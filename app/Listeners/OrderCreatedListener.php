<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class OrderCreatedListener
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
    public function handle(OrderCreated $event)
    {
        // Increment a value for all users or send an email to them
        $users = User::all();
        foreach ($users as $user) {
            // Perform the desired action for each user
            $user->incrementValue();
            // Or send an email to the user
            // $user->sendEmail();
        }
    }
}
