<?php

namespace EmptyMail;

use \Illuminate\Support\Facades\Facade as BaseFacade;

class Facade extends BaseFacade
{
    protected static function getFacadeAccessor()
    {
        return Mailer::class;
    }
}
