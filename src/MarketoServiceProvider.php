<?php

namespace GenTux\Artisan\Marketo;

use GenTux\Marketo\Client;
use Illuminate\Support\ServiceProvider;

class MarketoServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider
     */
    public function register()
    {
        $this->app->singleton('marketo', function() {
           return new Client([
               config('marketo.auth.api_url'),
               config('marketo.auth.client_id'),
               config('marketo.auth.client_secret')
           ]);
        });
    }

    /**
     * Create default config
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/marketo.php' => config('marketo.php')
        ]);
    }
}