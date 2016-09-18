<?php

namespace Lizard\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Lizard\Services\Tag\TaggableInterface;
use Watson\Validating\ValidatingTrait;

class Thread extends Model implements TaggableInterface
{
    use ValidatingTrait;

    /**
     * Whether the model should throw a ValidationException if it fails validation.
     * @var bool
     */
    protected $throwValidationExceptions = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'body', 'original_body', 'user_id', 'section_id', 'node_id', 'reply_count', 'last_reply_user_id'];

    /**
     * The validation rules.
     *
     * @var array
     */
    protected $rules = [
        'title' => 'required',
        'body' => 'required',
        'original_body' => 'required',
        'user_id' => 'required|integer',
        'section_id' => 'required|integer',
        'node_id' => 'required|integer',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function node()
    {
        return $this->belongsTo(Node::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lastReplyUser()
    {
        return $this->belongsTo(User::class, 'last_reply_user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    /**
     * @param Builder $query
     */
    public function scopeRecentReply($query)
    {
        return $query->orderBy('updated_at', 'desc');
    }
}
