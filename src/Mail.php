<?php

namespace EmptyMail;

class Mail
{
    public function test()
    {
        $params = include __DIR__ . '/../configs/email.php';
        dd($params);
        return 12365;
    }
}
