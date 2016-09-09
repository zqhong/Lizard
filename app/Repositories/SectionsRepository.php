<?php
/*
 * This file is part of Lizard.
 *
 * @author zqhong <i@zqhong.com>
 * @date 2016/9/9 23:52
 * @namespace Lizard\Repositories
 * @filename SectionsRepository.php
 * @encoding UTF-8
 */

namespace Lizard\Repositories;


use Bosnadev\Repositories\Eloquent\Repository;
use Lizard\Models\Section;

class SectionRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Section::class;
    }

}