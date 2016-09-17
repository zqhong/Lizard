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


final class AddThreadCommand
{
    /**
     * Thread title
     *
     * @var string
     */
    protected $title;

    /**
     * Thread body
     *
     * @var string
     */
    protected $body;

    /**
     * The author uid of thread
     *
     * @var integer
     */
    protected $user_id;

    /**
     * The node id of thread
     *
     * @var integer
     */
    protected $node_id;

    /**
     * The tags of thread
     *
     * @var array
     */
    protected $tags;

    /**
     * The validation rules
     *
     * @var array
     */
    protected $rules = [
        'title' => 'required|string',
        'body' => 'required|string',
        'user_id' => 'int',
        'node_id' => 'int',
    ];

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
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return int
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }
}