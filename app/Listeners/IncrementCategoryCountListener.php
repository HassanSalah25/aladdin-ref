<?php

namespace App\Listeners;

use App\Events\IncrementItemCountEvent;

class IncrementCategoryCountListener
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
        $event->modal->update([
            'children_count' => $event->modal->children_count + 1,
        ]);
    }
}
