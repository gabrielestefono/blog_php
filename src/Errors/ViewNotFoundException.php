<?php

namespace App\Errors;

use Exception;

// TODO: Documentar essa classe

class ViewNotFoundException extends Exception
{
    public function __construct(string $message)
    {
        $code = 404;

        parent::__construct($message, $code);
    }
}
