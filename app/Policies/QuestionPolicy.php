<?php

namespace App\Policies;

use App\post;
use App\question;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\DB;


class QuestionPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        if($user->isAdmin() || $user->isTeacher())
            return true;
        return Response::deny('invalid for student\'s ');
    }

    public function update(User $user, question $question)
    {
        if($user->id == $question->user_id)
            return "true";
        else
            return false;
    }

    public function delete(User $user, question $question)
    {
        $posts_questions = DB::table('posts_questions')->where('question_id', $question->id)->get();
        if(sizeof($posts_questions))
            return Response::deny('ther\'s many post\'s use this question, so you can delete it');
        else if($user->isAdmin() || $question->user_id == $user->id)
            return true;
        else
            return false;
    }


}
