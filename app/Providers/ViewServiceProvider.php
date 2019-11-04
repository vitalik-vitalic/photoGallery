<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
//use App\Providers\ViewComposers\SiteComposer;

class ViewServiceProvider extends ServiceProvider
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
        //
        //echo 'Hello from ViewServiceProvider';
        View::composer('layouts.*', 'App\Providers\ViewComposers\SiteComposer'); //or view()->compose();
    }
}
