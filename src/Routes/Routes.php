<?php

namespace App\Routes;

use App\Helpers\View;

class Routes
{
    use View;

    public static $routes = [
        '/' => 'index.php',
        '/category' => 'category.php',
        '/post' => 'post.php',
        '/author' => 'author.php',
    ];

    public static $routesAdmin = [
        '/admin' => 'index.php',
        '/admin/posts' => 'posts/posts.php',
        '/admin/posts/create' => 'posts/create.php',
        '/admin/posts/edit/{id}' => 'posts/edit.php',
        '/admin/profile' => 'profile.php',
    ];

    public static function routes(): void
    {
        $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $routes = self::$routes;

        // Função para buscar rota com suporte a parâmetros
        $matchRoute = function ($routes, $uri) {
            foreach ($routes as $pattern => $file) {
                $regex = preg_replace('#\{[a-zA-Z_]+\}#', '([^/]+)', $pattern);
                if (preg_match('#^' . $regex . '$#', $uri, $matches)) {
                    preg_match_all('#\{([a-zA-Z_]+)\}#', $pattern, $paramNames);
                    $params = array_combine($paramNames[1], array_slice($matches, 1));
                    $_GET = array_merge($_GET, $params);
                    return $file;
                }
            }
            return null;
        };

        // Verifica rotas comuns
        if (isset($routes[$request_uri])) {
            View::pagesView(self::$routes[$request_uri]);
            return;
        }

        // Verifica rotas dinâmicas de admin
        if ($file = $matchRoute(self::$routesAdmin, $request_uri)) {
            View::adminView($file);
            return;
        }

        View::errorView('404.php');
    }

    public static function getActiveRoute(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

    public static function getTypeRoute(): string
    {
        if (strpos(self::getActiveRoute(), '/admin') === 0) {
            return 'admin';
        }
        return 'visitor';
    }
}
