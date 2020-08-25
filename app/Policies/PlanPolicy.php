<?php

namespace App\Policies;

use App\User;
use App\plan;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class PlanPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return IsValid::just_for_admin_and_teacher($user);
    }

    public function view(User $user, plan $plan)
    {
        return $this->teacher_and_admin_with_new_condition($user, $plan);
    }

    public function create(User $user)
    {
        return IsValid::just_for_admin_and_teacher($user);
    }

    public function update(User $user, plan $plan)
    {
        return $this->teacher_and_admin_with_new_condition($user, $plan);
    }

    public function delete(User $user, plan $plan)
    {
        return $this->teacher_and_admin_with_new_condition($user, $plan);
    }

    private function teacher_and_admin_with_new_condition(User $user, plan $plan)
    {
        if($user->isAdmin())
            return true;
        else {
            $matching = ($user->id==$plan->user_id); //just for teacher that create/update/delete this plan, allow.
            return ((IsValid::just_for_admin_and_teacher($user) && $matching)
                ? Response::allow()
                : Response::deny('you cant update/delete just your contacts'));
        }
    }


}
