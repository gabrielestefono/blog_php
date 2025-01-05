<?php

namespace App\Errors;

use Exception;

// TODO: Documentar essa classe

class EnvironmentVariableNotFoundException extends Exception
{
    public function __construct(string $message)
    {
        $code = 500;

        parent::__construct($message, $code);
    }
}
