<?php

namespace App\Policies;

use App\User;
use App\topic;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;


class TopicPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        return IsValid::just_for_admin_and_teacher($user);
    }


    public function view(User $user, topic $topic)
    {
        return IsValid::just_for_admin($user);
    }


    public function create(User $user)
    {
        $response = IsValid::just_for_admin_and_teacher_just_with_reject_state($user, true);
        if (!$response) {
            $response = new Response('true', 'wait_accept');
        }
        return $response;
    }

    public function update(User $user, topic $topic)
    {
        return IsValid::just_for_admin($user);
    }

    public function delete(User $user, topic $topic)
    {
        return IsValid::just_for_admin($user);
    }


}
