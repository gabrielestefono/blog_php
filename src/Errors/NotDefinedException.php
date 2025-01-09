<?php

namespace App\Errors;

use Exception;

/**
 * Classe de exceção para quando uma variável de ambiente não é encontrada.
 */
class NotDefinedException extends Exception
{
    /**
     * Construtor da classe.
     * @param string $message
     */
    public function __construct(string $message)
    {
        $code = 400;

        parent::__construct($message, $code);
    }
}
