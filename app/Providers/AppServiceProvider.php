<?php

namespace App\Providers;

use App\Services\MymailerServices;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('MymailerServices', function($app)
        {
            return new MymailerServices();
        });
        $this->app->bind('App\Contracts\Mailer', 'App\Services\MymailerServices');

    }


}
