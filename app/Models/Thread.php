<?php

namespace Lizard\Models;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'slug', 'body', 'original_body', 'user_id', 'reply_count', 'last_reply_user'];
}
