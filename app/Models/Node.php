<?php

namespace Lizard\Models;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['section_id', 'name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
