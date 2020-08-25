<?php

namespace App\Http\Controllers\Student;

use App\Http\Resources\PostsWeek;
use App\plan;
use App\position;
use App\post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    public function view(Request $request)
    {
        // return all post's for specific plan and week.
        //steps: TODO:
        /*
         1. plan id for specific student. must set default if there's no plan_id in session
         2. get all post that have plan_id for plan id in step no. 1
         3. pass this post's for PostsWeek resource and then return it as response.
        */
        return $this->handle();
    }

    public function handle()
    {
        // for handel the all info in this view.
        $user_id = Auth::id();
        if(session()->has('plan_id'))
            $plan_id = session('plan_id');
        else {
            //default plan, when use did not select specific plan to go.
            $plan = position::where('student_id', $user_id)->select('plan_id')->first();
            if($plan==null)
                return redirect('/register/page2');
            else
                $plan_id = $plan->plan_id;
        }
        $week = (position::where(['student_id' => $user_id, 'plan_id' => $plan_id])->pluck('week'))[0];
        $posts = $this->getPostsByPlanIdAndWeekOrder($plan_id, $week);
        return PostsWeek::collection($posts);

    }
    public function getPostsByPlanIdAndWeekOrder($plan_id, $week) {
        return post::where(['plan_id'=>$plan_id, 'week'=>$week])->get();
    }




}
