<?php

namespace App\Routes;

use App\Controllers\Admin\ProfileController;
use App\Helpers\View;
use App\Controllers\Admin\PostController;
use App\Controllers\Admin\DashboardController;
use App\Controllers\Visitors\PostController as VisitorsPostController;
use App\Controllers\Visitors\AuthorController as VisitorsAuthorController;
use App\Controllers\Visitors\CategoryController as VisitorsCategoryController;
use App\Controllers\Visitors\DashboardController as VisitorsDashboardController;

// TODO: Documentar essa classe

class Routes
{
    use View;

    private static $params = [];

    private static $routes = [
        '/' => [VisitorsDashboardController::class, 'index'],
        '/category' => [VisitorsCategoryController::class, 'index'],
        '/post' => [VisitorsPostController::class, 'index'],
        '/author' => [VisitorsAuthorController::class, 'index'],
    ];

    private static $routesAdmin = [
        '/admin' => [DashboardController::class, 'index'],
        '/admin/posts' => [PostController::class, 'index'],
        '/admin/posts/create' => [PostController::class, 'create'],
        '/admin/posts/edit/{id}' => [PostController::class, 'edit'],
        '/admin/profile' => [ProfileController::class, 'index'],
    ];

    private static function typingParams($params): array
    {
        $paramsTyped = [];
        foreach ($params as $key => $value) {
            $paramsTyped[$key] = is_numeric($value) ? (int) $value : $value;
        }
        return $paramsTyped;
    }

    private static function matchRoute($routes, $uri)
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

    public static function routes(): void
    {
        $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $routes = array_merge(self::$routes, self::$routesAdmin);
        $file = self::matchRoute($routes, $request_uri);

        if ($file && gettype($file) === 'array') {
            $controller = $file[0];
            $metodo = $file[1];
            $controller = new $controller();
            $controller->$metodo(...array_values(self::$params));
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
