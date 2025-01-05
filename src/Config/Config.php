<?php

namespace App\Config;

use App\Errors\EnvironmentVariableNotFoundException;
use Dotenv\Dotenv;

class Config
{
    /**
     * Base URL da aplicação
     * @var string
     */
    private static string $baseUrl;

    /**
     * Retorna a URL base da aplicação
     * Caso a variável de ambiente BASE_URL não esteja definida, uma exceção é lançada
     * // TODO: Verificar o que ocorre quando o arquivo .env não existe
     * @return string
     * @throws EnvironmentVariableNotFoundException
     */
    public static function getBaseUrl()
    {
        if (!isset(self::$baseUrl)) {
            $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
            $variables = $dotenv->load();

            if(!isset($variables['BASE_URL'])){
                throw new EnvironmentVariableNotFoundException('BASE_URL not found in .env file');
            }

            self::$baseUrl = $variables['BASE_URL'];
        }

        return self::$baseUrl;
    }
}
