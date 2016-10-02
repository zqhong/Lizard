<?php
/*
 * This file is part of Lizard.
 *
 * @author zqhong <i@zqhong.com>
 * @date 2016/10/2 10:10
 * @namespace Commands\Reply
 * @filename AddReplyCommand.php
 * @encoding UTF-8
 */

namespace Lizard\Commands\Reply;

use Lizard\Events\AfterAddReplyEvent;
use Lizard\Events\BeforeAddReplyEvent;
use Lizard\Models\Reply;

final class AddReplyCommand
{
    /**
     * @var int
     */
    protected $thread_id;

    /**
     * @var int
     */
    protected $user_id;

    /**
     * @var string
     */
    protected $original_body;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var string
     */
    protected $user_agent;

    /**
     * AddReplyCommand constructor.
     *
     * @param int $thread_id
     * @param int $user_id
     * @param string $original_body
     * @param string $body
     * @param string $user_agent
     */
    public function __construct($thread_id, $user_id, $original_body, $body, $user_agent)
    {
        $this->thread_id = $thread_id;
        $this->user_id = $user_id;
        $this->original_body = $original_body;
        $this->body = $body;
        $this->user_agent = $user_agent;
    }

    /**
     * Add a reply.
     *
     * @return Reply
     */
    public function handle()
    {
        $data = [
            'thread_id' => $this->thread_id,
            'user_id' => $this->user_id,
            'original_body' => $this->original_body,
            'body' => $this->body,
            'user_agent' => $this->user_agent,
        ];

        event(new BeforeAddReplyEvent($data));

        $reply = Reply::create($data);

        event(new AfterAddReplyEvent($reply));

        return $reply;
    }
}
