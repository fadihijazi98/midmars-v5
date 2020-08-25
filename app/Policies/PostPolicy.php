<?php

namespace App\Policies;

use App\User;
use App\post;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    use HandlesAuthorization;


    public function create(User $user)
    {
        if($user->isTeacher() || $user->isAdmin())
            return true;
        else
            return Response::deny('This action not valid for you. pleas dont try this again.');
    }


    public function update(User $user, post $post)
    {
       return $this->checkPoint($user, $post);
    }

    public function delete(User $user, post $post)
    {
        return $this->checkPoint($user, $post);
    }

    private function checkPoint(User $user, post $post) {
        if($user->isAdmin() || $post->user_id == $user->id)
            return true;
        else
            return Response::deny('invalid act');
    }
}
