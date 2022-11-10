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
        try {
            $new_header = $message->getHeaders();
            $new_header->setHeaderBody('', 'to', [Address::create('user@gmail.com')]);
            $message->setHeaders($new_header);
            return $this->transport->send($message, Envelope::create($message));
        } finally {
            //
        }
    }

}
