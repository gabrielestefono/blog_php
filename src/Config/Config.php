<?php

namespace App\Config;

use App\Errors\EnvironmentVariableNotFoundException;
use Dotenv\Dotenv;

class Config extends BaseConfig
{
    /**
     * Retorna a URL base da aplicação
     * Caso a variável de ambiente BASE_URL não esteja definida, uma exceção é lançada
     * @return string
     * @throws EnvironmentVariableNotFoundException
     */
    public static function getBaseUrl(): string
    {
        return self::getEnvVariable("BASE_URL");
    }
}
