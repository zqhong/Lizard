<?php

namespace Lizard\Listeners;

use Lizard\Events\BeforeShowThread;

class AddThreadViewCount
{


    /**
     * Handle the event.
     *
     * @param  BeforeShowThread $event
     * @return bool
     */
    public function handle(BeforeShowThread $event)
    {
        $thread = $event->getThread();
        $thread->view_count += 1;
        $thread->save();

        return true;
    }
}
