<?php

namespace Lizard\Models;

use Illuminate\Database\Eloquent\Model;

class Taggable extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function threads()
    {
        return $this->morphToMany(Thread::class, 'taggable');
    }
}
