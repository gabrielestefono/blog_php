<?php

namespace App\Errors;

use Exception;

class ViewNotFoundException extends Exception
{
    public function __construct(string $message)
    {
        $code = 404;

        parent::__construct($message, $code);
    }
}
