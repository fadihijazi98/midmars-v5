<?php


namespace App\Policies;


use App\User;
use Illuminate\Auth\Access\Response;

class IsValid
{

    public static function just_for_admin_and_teacher_just_with_reject_state(User $user, $is_topic=false)
    {
        if ($user->isTeacher()) {
            return false;
        } else if ($user->isStudent()) {
            return Response::deny('you as student cant suggest or add new topic !');
        } else {
            return Response::allow();
        }
    }

    public static function just_for_admin_and_teacher(User $user)
    {
        return ($user->isAdmin() | $user->isTeacher())
            ? Response::allow()
            : Response::deny('Student can\'t arrive to this section. reject');
    }

    public static function just_for_admin($user)
    {
        return $user->isAdmin() ? Response::allow() : Response::deny('This action just for admin');
    }
}
