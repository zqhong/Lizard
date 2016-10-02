<?php

namespace Lizard\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Reply extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['thread_id', 'user_id', 'original_body', 'body', 'user_agent'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
