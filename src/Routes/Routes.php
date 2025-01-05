<?php

namespace App\Routes;

use App\Helpers\View;
use App\Helpers\Traits\RoutesHelper;
use App\Controllers\Admin\PostController;
use App\Controllers\Admin\ProfileController;
use App\Controllers\Admin\DashboardController;
use App\Controllers\Visitors\PostController as VisitorsPostController;
use App\Controllers\Visitors\AuthorController as VisitorsAuthorController;
use App\Controllers\Visitors\CategoryController as VisitorsCategoryController;
use App\Controllers\Visitors\DashboardController as VisitorsDashboardController;

class Routes
{
    use View, RoutesHelper;
    
    /**
     * Método de rotas
     * Este método é responsável por definir as rotas da aplicação
     * Ele verifica a rota atual, caso não encontre a rota, ele retorna um erro 404
     * Caso encontre a rota, ele chama o controller e o método correspondente
     * Caso seja passado algum parâmetro, ele também é passado para o método
     * @return void
     */
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

    /**
     * Rotas da aplicação
     * Rotas de visitantes
     * @var array
     */
    private static $routes = [
        '/' => [VisitorsDashboardController::class, 'index'],
        '/category' => [VisitorsCategoryController::class, 'index'],
        '/post' => [VisitorsPostController::class, 'index'],
        '/author' => [VisitorsAuthorController::class, 'index'],
    ];

    /**
     * Rotas da aplicação
     * Rotas de administradores
     * @var array
     */
    private static $routesAdmin = [
        '/admin' => [DashboardController::class, 'index'],
        '/admin/posts' => [PostController::class, 'index'],
        '/admin/posts/create' => [PostController::class, 'create'],
        '/admin/posts/edit/{id}' => [PostController::class, 'edit'],
        '/admin/profile' => [ProfileController::class, 'index'],
    ];
}
