<?php
/*
 * This file is part of Lizard.
 *
 * @author zqhong <i@zqhong.com>
 * @date 2016/9/12 8:21
 * @namespace Repositories\Criteria\Thread
 * @filename Filter.php
 * @encoding UTF-8
 */

namespace Lizard\Repositories\Criteria\Thread;


use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;
use Bosnadev\Repositories\Criteria\Criteria;
use Bosnadev\Repositories\Criteria\RepositoryInterface;
use Lizard\Models\Thread;

class Filter extends Criteria
{
    /**
     * @var string
     */
    protected $filter;

    /**
     * Filter constructor.
     *
     * @param string $filter
     */
    public function __construct($filter)
    {
        $this->filter = $filter;
    }

    /**
     * @param Thread $model
     * @param Repository $repository
     * @return mixed|void
     */
    public function apply($model, Repository $repository)
    {
        switch ($this->filter) {
            default:
                return $model->recentReply();
                break;
        }
    }
}