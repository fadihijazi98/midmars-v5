<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $guarded = ['id'];
    //relation
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function topic() {
        return $this->belongsTo(topic::class);
    }
    public function plan() {
        return $this->belongsTo(plan::class);
    }
    public function questions() {
        return $this->belongsToMany(question::class, 'post_question')->withTimestamps();
    }

    public function url() {
        return "/post/{$this->id}";
    }
}
