<?php

namespace Lizard\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Queue\SerializesModels;
use Lizard\Models\Thread;

class AfterAddThreadEvent
{
    use InteractsWithSockets, SerializesModels;

    /**
     * @var Thread
     */
    protected $thread;

    /**
     * Create a new event instance.
     *
     * @param Thread $thread
     */
    public function __construct(Thread $thread)
    {
        $this->thread = $thread;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
