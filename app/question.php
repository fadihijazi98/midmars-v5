<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    /*
     how we can add:
        $post = \App\post::find(4);
        $question = \App\question::find(1);
        $post->questions()->attach($question);
     */
    protected $guarded = ['id', 'user_id'];

    public function posts() {
        return $this->belongsToMany(post::class, 'post_question')->withTimestamps();
    }
}
