<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    protected $guarded = ['id'];
    //relation
    public function posts() {
        return $this->hasMany(post::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
