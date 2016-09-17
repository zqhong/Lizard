<?php
/*
 * This file is part of Lizard.
 *
 * @author zqhong <i@zqhong.com>
 * @date 2016/9/17 11:20
 * @namespace Lizard\Handlers\Thread
 * @filename AddThreadCommandHandler.php
 * @encoding UTF-8
 */

namespace Lizard\Handlers\Thread;


use Lizard\Commands\Thread\AddThreadCommand;
use Lizard\Events\AfterAddThreadEvent;
use Lizard\Events\BeforeAddThreadEvent;
use Lizard\Models\Thread;

class AddThreadCommandHandler
{

    /**
     *
     * @param AddThreadCommand $command
     */
    public function handle(AddThreadCommand $command)
    {
        event(new BeforeAddThreadEvent($command));

        $data = [
            'title' => $command->getTitle(),
            'body' => $command->getBody(),
            'user_id' => $command->getUserId(),
            'node_id' => $command->getNodeId(),
        ];

        // Create the thread
        $thread = Thread::create($data);

        event(new AfterAddThreadEvent($thread));
    }
}