<?php

namespace App\Models;

use App\Classes\Model\Post;
use App\Config\Database;
use PDO;
use PDOException;

class Model
{
    protected static $dbConnection;

    protected static function setDbConnection(): void
    {
        $host = Database::getHost();
        $port = Database::getPort();
        $dbName = Database::getDbName();
        $username = Database::getUsername();
        $password = Database::getPassword();

        try {
            self::$dbConnection = new PDO("mysql:host=$host;port=$port;dbname=$dbName", $username, $password);
            self::$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
        }
    }

    protected static function create(string $sql): void
    {
        if (self::$dbConnection === null) {
            self::setDbConnection();
        }

        try {
            self::$dbConnection->query($sql);
            self::$dbConnection = null;
        } catch (PDOException $e) {
            echo "Erro ao executar a query: " . $e->getMessage();
        }
    }

    protected static function read(string $sql, string $class): ?array
    {
        $data = null;
        if (self::$dbConnection === null) {
            self::setDbConnection();
        }

        try {
            $retorno = null;
            $data = self::$dbConnection->query($sql);
            $data = $data->fetchAll(PDO::FETCH_ASSOC);
            foreach ($data as $value) {
                $retorno[] = new $class($value);
            }
            self::$dbConnection = null;
        } catch (PDOException $e) {
            echo "Erro ao executar a query: " . $e->getMessage();
        }
        return $retorno;
    }

    protected function update(string $sql)
    {
        // A ser implementado
    }

    protected function delete(string $sql)
    {
        // A ser implementado
    }
}
