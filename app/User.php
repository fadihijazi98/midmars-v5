<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'username', 'password', 'api_token'
    ];

    protected $hidden = [
        'password', 'remember_token', 'type'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    // relations ..
    public function topics() {
        return $this->hasMany(topic::class);
    }
    public function plans() {
        return $this->hasMany(plan::class);
    }
    public function posts() {
        return $this->hasMany(post::class);
    }
    public function questions() {
        return $this->hasMany(question::class);
    }
    public function rating() {
        return $this->hasMany(rating::class);
    }
    public function comments() {
        return $this->hasMany(comment::class);
    }
    public function messages() {
        return $this->hasMany(message::class);
    }
    public function solutions() {
        return $this->hasMany(message_seen::class);
    }

    //help auth methods
    public function isAdmin() {
        return ($this->type === "admin");
    }
    public function isTeacher() {
        return ($this->type === "teacher");
    }
    public function isStudent() {
        return ($this->type === "student");
    }


}
