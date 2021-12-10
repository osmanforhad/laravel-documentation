<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ResultServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //bind or register Service Provider class as Service Container
        app()->bind('result', function() {
            return new \App\Repositories\Result;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
