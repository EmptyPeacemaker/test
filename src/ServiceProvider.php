<?php

namespace EmptyMail;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/empty-email.php' => config_path('empty-email.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/empty-email.php', 'empty-email.php',
        );
        $this->app->bind(Mail::class);
    }
}
