<?php

namespace App\Config;

use App\Errors\EnvironmentVariableNotFoundException;
use Dotenv\Dotenv;

class Config
{
    private static string $baseUrl;

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
