<?php

namespace Minasm\VueMake;

use Illuminate\Support\ServiceProvider;

class VuemakeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(['Minasm\VueMake\VueMakeCommand']);
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
