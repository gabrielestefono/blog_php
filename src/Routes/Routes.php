<?php

/**
 * Arquivo _root_/src/Routes/Routes.php
 */
namespace App\Routes;

use App\Helpers\View;

class Routes
{
    use View;
    public static function routes()
    {
        $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $routes = [
            '/' => 'index.php',
            '/post' => 'post.php',
        ];

        $path = $routes[$request_uri] ?? 'Errors/404.php';

        View::view($path);
    }
}
