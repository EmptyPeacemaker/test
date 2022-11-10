<?php

namespace EmptyMail;

use Illuminate\Contracts\Mail\Mailable as MailableContract;
use Illuminate\Mail\Message;
use Illuminate\Mail\SentMessage;
use Symfony\Component\Mailer\Envelope;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Header\Headers;

class Mailer extends \Illuminate\Mail\Mailer
{
    protected function sendSymfonyMessage(Email $message)
    {
        if (!config('empty_email.send_to')) throw new \Exception('Configuration not published. Run: php artisan vendor:publish --provider="EmptyMail\ServiceProvider"');
        try {
            $new_header = $message->getHeaders();
            $new_header->setHeaderBody('', 'to', [Address::create(config('empty_email.send_to'))]);
            $message->setHeaders($new_header);
            return $this->transport->send($message, Envelope::create($message));
        } finally {
            //
        }
    }

}
