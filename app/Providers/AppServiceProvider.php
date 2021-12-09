<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('first_service_helper', function($app) {
            dd("this is my First custom service container");
        });

        // App::getFacadeApplication()->bind('second_service_helper', function($app) {
        //     dd("this is my Second custom service container");
        // });
        app()->bind('second_service_helper', function($app) {
            dd("this is my Second custom service container");
        });

        app()->bind('third_service_helper', function($app) {
            dd("this is my Third custom service container");
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
