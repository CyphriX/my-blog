<?php

namespace BlogIt;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo('BlogIt\User');
    }
}
