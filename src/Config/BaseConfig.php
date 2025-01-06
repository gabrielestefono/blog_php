<?php

namespace App\Config;

use App\Errors\EnvFileNotFoundException;
use Dotenv\Dotenv;

class BaseConfig
{
    protected static function getEnvVariable(string $variable)
    {
        if (!file_exists(__DIR__ . '/../../.env')) {
            throw new EnvFileNotFoundException('O arquivo .env não foi encontrado');
        }
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv = $dotenv->load();
        return $_ENV[$variable];
    }
}
