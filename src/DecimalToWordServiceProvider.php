<?php

namespace Ashik\DecimalToWord;

use Illuminate\Support\ServiceProvider;

class DecimalToWordServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Code to run during package boot, if needed
    }

    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('decimal-to-word', function ($app) {
            return new DecimalToWord();
        });
    }
}
