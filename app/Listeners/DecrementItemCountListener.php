<?php

namespace App\Listeners;

use App\Events\IncrementItemCountEvent;

class DecrementItemCountListener
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
     * @param  \App\Events\IncrementItemCountEvent  $event
     * @return void
     */
    public function handle(IncrementItemCountEvent $event)
    {
        //
        $event->modal->category->update([
            'items_count' => $event->modal->category->items_count - 1,
        ]);
        $event->modal->city->update([
            'items_count' => $event->modal->category->items_count - 1,
        ]);
        $event->modal->state->update([
            'items_count' => $event->modal->category->items_count - 1,
        ]);
    }
}
