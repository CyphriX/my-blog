<?php

namespace BlogIt;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = [];

    public function posts() {
        return $this->hasMany('BlogIt\Post', 'user_id', 'id');
    }

    public function comments() {
        return $this->hasMany('BlogIt\Comment', 'user_id', 'id');
    }

    public function roles() {
        return $this->hasMany('BlogIt\Role', 'user_id', 'id');
    }
}
