<?php

namespace App\Providers;

use App\plan;
use App\Policies\PlanPolicy;
use App\Policies\PostPolicy;
use App\Policies\QuestionPolicy;
use App\Policies\TopicPolicy;
use App\post;
use App\question;
use App\topic;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        topic::class => TopicPolicy::class,
        plan::class => PlanPolicy::class,
        post::class => PostPolicy::class,
        question::class => QuestionPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
