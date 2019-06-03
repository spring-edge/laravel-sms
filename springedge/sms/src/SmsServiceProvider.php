<?php

namespace Springedge\Sms;

use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
            $this->app->make('Springedge\Sms\SpringedgeSms');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
	       include __DIR__.'/routes.php';
    }
}
