<?php

namespace Lizard\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['thread_id', 'user_id', 'original_body', 'body', 'device_name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }
}
