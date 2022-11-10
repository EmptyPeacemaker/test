<?php

namespace EmptyMail;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../configs/empty_email.php' => config_path('empty_email.php'),
        ]);

    }

    public function register()
    {
        $this->publishes([
            __DIR__.'/../configs/empty_email.php' => config_path('empty_email.php'),
        ]);
        $this->app->bind(Mailer::class);
    }
}
