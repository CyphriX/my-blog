<?php

namespace BlogIt;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post() {
        return $this->belongsTo('BlogIt\Post', 'post_id');
    }

    public function user() {
        return $this->belongsTo('BlogIt\User', 'user_id');
    }
}
