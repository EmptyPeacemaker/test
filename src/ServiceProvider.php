<?php

namespace EmptyMail;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind(Mail::class);
    }
}
