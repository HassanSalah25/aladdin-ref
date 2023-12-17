<?php

namespace App\Providers;

use App\Events\ContentCreated;
use App\Events\ContentUpdated;
use App\Events\DecrementCategoryCountEvent;
use App\Events\DecrementItemCountEvent;
use App\Events\IncrementCategoryCountEvent;
use App\Events\IncrementItemCountEvent;
use App\Listeners\DecrementCategoryCountListener;
use App\Listeners\DecrementItemCountListener;
use App\Listeners\IncrementCategoryCountListener;
use App\Listeners\IncrementItemCountListener;
use App\Listeners\LogContentActivity;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        'App\Events\OrderCreated' => [
            'App\Listeners\OrderCreatedListener',
        ],
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ContentCreated::class => [
            LogContentActivity::class,
        ],
        ContentUpdated::class => [
            LogContentActivity::class,
        ],
        IncrementItemCountEvent::class => [
            IncrementItemCountListener::class,
        ],
        DecrementItemCountEvent::class => [
            DecrementItemCountListener::class,
        ],
        IncrementCategoryCountEvent::class => [
            IncrementCategoryCountListener::class,
        ],
        DecrementCategoryCountEvent::class => [
            DecrementCategoryCountListener::class,
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
