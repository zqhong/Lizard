<?php
/**
 * Created by PhpStorm.
 * User: zqhong
 * Date: 2016/9/4
 * Time: 16:03.
 */
namespace Lizard\Repositories;

interface ThreadInterface
{
    /**
     * List threads.
     *
     * @param int $limit
     * @param int $pageNum
     * @return mixed
     */
    public function index($limit = 10, $pageNum = 1);

    /**
     * Find thread by slug.
     *
     * @param $slug
     * @return mixed
     */
    public function bySlug($slug);

    /**
     * Find threads by tag.
     *
     * @param int $limit
     * @param int $pageNum
     * @return mixed
     */
    public function byTag($limit = 10, $pageNum = 1);

    /**
     * Find threads by user UUID.
     *
     * @param $user_uuid
     * @return mixed
     */
    public function byUser($user_uuid);

    /**
     * Save a new thread.
     *
     * @param array $attributes
     * @return mixed
     */
    public function save(array $attributes);

    /**
     * Store new attributes for a exist thread.
     *
     * @param $slug
     * @param $attributes
     * @return mixed
     */
    public function store($slug, $attributes);

    /**
     * Delete a thread.
     *
     * @param $slug
     * @return mixed
     */
    public function delete($slug);
}
