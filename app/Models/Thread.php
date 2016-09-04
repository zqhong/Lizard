<?php

namespace Lizard\Models;

use Illuminate\Database\Eloquent\Model;


class Thread extends Model
{
    /**
     * 定义可以被修改的列
     * 
     * @var array
     */
    protected $fillable = ['title', 'body', 'original_body', 'user_id', 'reply_count', 'last_reply_user'];
}
