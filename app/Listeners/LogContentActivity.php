<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Spatie\Activitylog\Models\Activity;

class LogContentActivity
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
        $contentModel = $event->contentModel;
        $log = $event->log;

        activity()
            ->causedBy(auth()->user()) // Assuming you're using authentication
            ->performedOn($contentModel)
            ->log($log);
    }
}
