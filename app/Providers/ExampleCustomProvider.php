<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ExampleCustomProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $data = array();
        $data['a'] = 10;
        $data['b'] = 20;
        $data['c'] = 30;

        //for passing the array into total application
        view()->share('number', $data);
    }
}
