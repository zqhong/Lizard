<?php

namespace Lizard\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nodes()
    {
        return $this->hasMany(Node::class);
    }
}
