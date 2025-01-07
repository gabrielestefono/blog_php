<?php

namespace App\Errors;

use Exception;

/**
 * Classe de exceção para quando a view não é encontrada.
 */
class DatabaseTableNotFoundException extends Exception
{
    /**
     * Construtor da classe.
     * @param string $message
     */
    public function __construct(string $message)
    {
        $code = 404;

        parent::__construct($message, $code);
    }
}
