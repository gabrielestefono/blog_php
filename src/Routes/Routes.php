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
            '/category' => 'category.php',
            '/post' => 'post.php',
            '/author' => 'author.php',
        ];

        $routesAdmin = [
            '/admin' => 'index.php',
            '/admin/posts' => 'posts.php',
            '/admin/profile' => 'profile.php',
        ];

        if(isset($routes[$request_uri])){
            View::pagesView($routes[$request_uri]);
            return;
        }
        
        if(isset($routesAdmin[$request_uri])){
            View::adminView($routesAdmin[$request_uri]);
            return;
        }
        
        View::errorView('404.php');
    }
}
