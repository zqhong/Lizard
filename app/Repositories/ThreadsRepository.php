<?php
/*
 * This file is part of Lizard.
 *
 * @author zqhong <i@zqhong.com>
 * @date 2016/9/9 23:16
 * @namespace Lizard\Repositories
 * @filename ThreadsRepository.php
 * @encoding UTF-8
 */

namespace Lizard\Repositories;


use Bosnadev\Repositories\Eloquent\Repository;
use Lizard\Models\Thread;

class ThreadsRepository extends Repository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Thread::class;
    }

    /**
     * @return mixed
     */
    public function fetchThreads()
    {
        return $this->with(['node', 'user', 'lastReplyUser'])->paginate(10);;
    }
}
