<?php

namespace App;


class Post extends Model
{
    protected $fillable = ['title', 'description', 'cost', 'slug', 'user_id', 'category_id' ];
    protected $table = "post";

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function category()
    {
        return $this->hasOne(Categories::class, 'id', 'category_id');
    }
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body) {

        $this->comments()->create([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

    }
}
