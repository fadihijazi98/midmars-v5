<?php

namespace App\Providers;

use App\Examples\Credit;
use App\Examples\Payemnt;
use App\Http\Controllers\MessageController;
use App\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{


    public function register()
    {

        $this->app
            ->when(MessageController::class)
            ->needs(Payemnt::class)
            ->give(function ($app) {
               return new Credit('0$');
            });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
