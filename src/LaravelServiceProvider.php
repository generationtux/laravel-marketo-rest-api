<?php

namespace GenTux\Artisan\Marketo;


class LaravelServiceProvider extends BaseServiceProvider
{
    /**
     * Create default config
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/marketo.php' => config('marketo.php')
        ]);
    }
}