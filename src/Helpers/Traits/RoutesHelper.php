<?php

namespace App\Helpers\Traits;

use App\Helpers\View;

trait RoutesHelper
{
    /**
     * Método que retorna a rota ativa
     * @return string
     */
    public static function getActiveRoute(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

    /**
     * Método que retorna o tipo de rota, se é admin ou visitor
     * @return string
     */
    public static function getTypeRoute(): string
    {
        if (strpos(self::getActiveRoute(), '/admin') === 0) {
            return 'admin';
        }
        return 'visitor';
    }

    /**
     * Método que verifica rotas com parâmetros
     * Ele separa os parâmetros da rota seta os valores na variável $params
     * @param array $routes
     * @param string $uri
     * @return array | null
     */
    private static function matchRoute($routes, $uri): array | null
    {
        foreach ($routes as $pattern => $file) {
            $regex = preg_replace('#\{[a-zA-Z_]+\}#', '([^/]+)', $pattern);
            if (preg_match('#^' . $regex . '$#', $uri, $matches)) {
                preg_match_all('#\{([a-zA-Z_]+)\}#', $pattern, $paramNames);
                $params = array_combine($paramNames[1], array_slice($matches, 1));
                self::$params = array_merge($_GET, $params);
                self::$params = self::typingParams(self::$params);
                return $file;
            }
        }
        return null;
    }

    /**
     * Método que tipa os parâmetros da rota
     * @param array $params
     * @return array
     */
    private static function typingParams($params): array
    {
        $paramsTyped = [];
        foreach ($params as $key => $value) {
            $paramsTyped[$key] = is_numeric($value) ? (int) $value : $value;
        }
        return $paramsTyped;
    }

    /**
     * Atributo que armazena os parâmetros da rota
     * @var array
     */
    private static array $params = [];
}
