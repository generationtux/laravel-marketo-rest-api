<?php

namespace GenTux\Artisan\Marketo;


class LumenServiceProvider extends BaseServiceProvider
{
    /**
     * Create default config
     */
    public function boot()
    {
        $this->app->configure('marketo');
    }
}