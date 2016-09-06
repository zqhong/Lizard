<?php

namespace Lizard\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'thread_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function threads()
    {
        return $this->belongsToMany(Thread::class);
    }
}
