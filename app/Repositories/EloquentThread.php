<?php
/**
 * Created by PhpStorm.
 * User: zqhong
 * Date: 2016/9/4
 * Time: 16:09
 */

namespace Lizard\Repositories;


use Lizard\Models\Thread;

class EloquentThread implements ThreadInterface
{


    public function index($limit = 10)
    {
        return Thread::paginate($limit);
    }

    public function bySlug($slug)
    {
    }

    public function byTag($tag, $page = 1, $limit = 10)
    {
    }
}