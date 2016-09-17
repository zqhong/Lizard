<?php

namespace Lizard\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;
use Lizard\Commands\Thread\AddThreadCommand;

class BeforeAddThreadEvent
{
    use InteractsWithSockets, SerializesModels;

    /**
     * @var AddThreadCommand
     */
    protected $command;

    /**
     * Create a new event instance.
     *
     * @param AddThreadCommand $command
     */
    public function __construct(AddThreadCommand $command)
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
