<?php

namespace App;


class Comment extends Model
{
    public function post() {
        return $this->belongsTo(Post::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
