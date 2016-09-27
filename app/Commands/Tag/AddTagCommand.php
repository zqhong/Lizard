<?php
/*
 * This file is part of Lizard.
 *
 * @author zqhong <i@zqhong.com>
 * @date 2016/9/18 21:19
 * @namespace Lizard\Commands\Tag
 * @filename AddTagCommand.php
 * @encoding UTF-8
 */

namespace Lizard\Commands\Tag;

use Illuminate\Database\Eloquent\Collection;
use Lizard\Models\Tag;
use Lizard\Services\Tag\TaggableInterface;

final class AddTagCommand
{
    /**
     * Attach tags to the taggable model.
     *
     * @param TaggableInterface $taggable
     * @param array|Collection $tags
     */
    public function attach(TaggableInterface $taggable, $tags)
    {
        if (empty($tags)) {
            $taggable->tags()->sync([]);

            return;
        }

        $ids = $this->getTagsId($tags);
        $taggable->tags()->sync($ids);
    }

    /**
     * @param array|Collection $tags
     */
    protected function getTagsId($tags)
    {
        $existing_tags = Tag::whereIn('name', $tags)->get();

        $new_tags = array_diff($tags, $existing_tags->pluck('name')->all());
        $new_ids = $this->multiInsert($new_tags);

        return array_merge($existing_tags->pluck('id')->all(), $new_ids);
    }

    /**
     * @param  array|Collection $tags
     * @return array
     */
    protected function multiInsert($tags)
    {
        $tagsId = [];

        foreach ($tags as $name) {
            $tag = Tag::firstOrCreate(['name' => $name]);
            $tagsId[] = $tag->id;
        }

        return $tagsId;
    }
}
