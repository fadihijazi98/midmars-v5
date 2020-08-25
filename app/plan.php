<?php

namespace App;

use http\Url;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class plan extends Model
{
    protected $guarded = ['id'];
    //relation
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function posts() {
        return $this->belongsToMany(post::class);
    }

    public function url() {
        $user = Auth::user();
        if($user->isAdmin()) {
            return '/admin/teacher';
        }
        else if($user->isTeacher()) {
            return '/teacher/index';
        }
        else {
            // so it's student
            session(['plan_id'=>$this->id]);
            return "/student/index";
        }
    }
}
