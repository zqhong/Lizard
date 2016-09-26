<?php
/*
 * This file is part of Lizard.
 *
 * @author zqhong <i@zqhong.com>
 * @date 2016/9/17 11:11
 * @namespace Lizard\Commands\Thread
 * @filename AddThreadCommand.php
 * @encoding UTF-8
 */

namespace Lizard\Commands\Thread;

use Lizard\Commands\Tag\AddTagCommand;
use Lizard\Events\AfterAddThreadEvent;
use Lizard\Events\BeforeAddThreadEvent;
use Lizard\Models\Thread;

final class AddThreadCommand
{
    /**
     * Thread title.
     *
     * @var string
     */
    protected $title;

    /**
     * Thread body.
     *
     * @var string
     */
    protected $body;

    /**
     * The author uid of thread.
     *
     * @var int
     */
    protected $user_id;

    /**
     * The node id of thread.
     *
     * @var int
     */
    protected $node_id;

    /**
     * The tags of thread.
     *
     * @var array
     */
    protected $tags;

    /**
     * AddThreadCommand constructor.
     *
     * @param $title
     * @param $body
     * @param $user_id
     * @param $node_id
     * @param $tags
     */
    public function __construct($title, $body, $user_id, $node_id, $tags)
    {
        $this->title = $title;
        $this->body = $body;
        $this->user_id = $user_id;
        $this->node_id = $node_id;
        $this->tags = $tags;
    }

    /**
     * Add a thread
     *
     * @return static
     */
    public function handle()
    {
        $data = [
            'title' => $this->title,
            'body' => $this->body,
            'original_body' => $this->body,
            'user_id' => $this->user_id,
            'section_id' => 1,
            'node_id' => $this->node_id,
            'reply_count' => 0,
            'last_reply_user_id' => $this->user_id,
        ];

        event(new BeforeAddThreadEvent($data));

        $thread = Thread::create($data);
        app(AddTagCommand::class)->attach($thread, $this->tags);

        event(new AfterAddThreadEvent($thread));

        return $thread;
    }
}
