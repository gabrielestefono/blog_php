<?php

namespace App\Views\Pages\Admins\Classes;

use App\Classes\AdminBase;
use App\Classes\RouteClass;

class Categories extends AdminBase
{
    public static function routes(): array
    {
        return [
            '/admin/categories' => [self::class, 'listView', 'GET'],
            // '/admin/categories/create' => [PostController::class, 'create', 'GET'],
            // '/admin/categories/store' => [PostController::class, 'store', 'POST'],
            // '/admin/categories/edit/{id}' => [PostController::class, 'edit', 'GET'],
        ];
    }

    public function databaseTableName(): string
    {
        return 'categories';
    }

    public function table(): array
    {
        return [
            'id' => 'ID',
            'name' => 'Nome',
            'actions' => 'Ações',
        ];
    }

    public function getTitle(): string
    {
        return 'Categorias';
    }

    public static function registerSidebar(): array
    {
        return [
            new RouteClass('/admin/categories', 'Categories', true),
            new RouteClass('/admin/categories/create', 'Categories', false),
            new RouteClass('/admin/categories/edit/{id}', 'Categories', false),
        ];
    }
}
