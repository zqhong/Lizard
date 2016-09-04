<?php
/**
 * Created by PhpStorm.
 * User: zqhong
 * Date: 2016/9/4
 * Time: 16:03
 */

namespace Lizard\Repositories;


interface ThreadInterface
{
    /**
     * List threads
     *
     * @param int $limit
     * @return mixed
     */
    public function index($limit = 10);

    /**
     * Find thread by slug
     *
     * @param $slug
     * @return mixed
     */
    public function bySlug($slug);

    /**
     * Find threads by tag
     *
     * @param $tag
     * @param int $page
     * @param int $limit
     * @return mixed
     */
    public function byTag($tag, $page = 1, $limit = 10);
}