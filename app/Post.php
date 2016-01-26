<?php

namespace BlogIt;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments() {
        return $this->hasMany('BlogIt\Comment');
    }

    public function user() {
        return $this->belongsTo('BlogIt\User');
    }
}
