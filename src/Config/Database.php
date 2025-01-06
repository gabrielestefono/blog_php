<?php

namespace App\Config;

use App\Config\BaseConfig;
use App\Errors\EnvironmentVariableNotFoundException;

class Database extends BaseConfig
{
    public static function getHost(): string
    {
        return self::getEnvVariable("DB_HOST");
    }

    public static function getPort(): string
    {
        return self::getEnvVariable("DB_PORT");
    }

    public static function getDbName(): string
    {
        return self::getEnvVariable("MYSQL_DATABASE");
    }

    public static function getUsername(): string
    {
        return self::getEnvVariable("MYSQL_USER");
    }

    public static function getPassword(): string
    {
        return self::getEnvVariable("MYSQL_ROOT_PASSWORD");
    }
}
