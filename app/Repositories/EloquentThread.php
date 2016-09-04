<?php
/**
 * Created by PhpStorm.
 * User: zqhong
 * Date: 2016/9/4
 * Time: 16:09.
 */
namespace Lizard\Repositories;

use Lizard\Models\Thread;

class EloquentThread implements ThreadInterface
{
    public function index($limit = 10, $pageNum = 1)
    {
        return Thread::orderBy('id', 'desc')
            ->paginate($perPage = $limit, $columns = ['*'], $pageName = 'page', $page = $pageNum);
    }

    public function bySlug($slug)
    {
        $thread = Thread::where('slug', $slug)->first();
        if (empty($thread)) {
            return false;
        }

        return $thread;
    }

    public function save(array $attributes)
    {
        $thread = new Thread($attributes);

        return $thread->save();
    }

    public function store($slug, $attributes)
    {
        $thread = Thread::where('slug', $slug)->first();
        if (empty($thread)) {
            return false;
        }

        return $thread->update($attributes);
    }

    public function byUser($user_uuid)
    {
    }

    public function delete($slug)
    {
        $thread = Thread::where('slug', $slug);
        if (empty($thread)) {
            return false;
        }

        return $thread->delete();
    }

    public function byTag($limit = 10, $pageNum = 1)
    {
    }
}
