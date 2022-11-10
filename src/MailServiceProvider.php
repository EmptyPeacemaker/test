<?php

namespace EmptyMail;


class MailServiceProvider extends \Illuminate\Mail\MailServiceProvider
{
    public function register()
    {
        $this->app->singleton('mail.manager', function ($app) {
            return new MailManager($app);
        });

        $this->app->bind('mailer', function ($app) {
            return $app->make('mail.manager')->mailer();
        });
        $this->registerMarkdownRenderer();
    }

}
