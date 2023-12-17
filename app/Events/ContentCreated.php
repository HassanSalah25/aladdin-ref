<?php

namespace App\Events;

use App\Models\Category;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ContentCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $contentModel;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($contentModel)
    {
        $this->contentModel = $contentModel;
        $this->log = 'create';
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
