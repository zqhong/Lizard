<?php

namespace Lizard\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Queue\SerializesModels;

class BeforeAddThreadEvent
{
    use InteractsWithSockets, SerializesModels;

    /**
     * @var array
     */
    protected $command;

    /**
     * Create a new event instance.
     *
     * @param array
     */
    public function __construct(array $command)
    {
        $this->command = $command;
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
