<?php

namespace App\Views\Pages\Admins\Classes;

use App\Classes\AdminBase;
use App\Classes\Components\Table\TableText;
use App\Classes\RouteClass;

class Categories extends AdminBase
{
    public static function routes(): array
    {
        return [
            '/admin/categories' => [self::class, 'listView', 'GET'],
            '/admin/categories/create' => [self::class, 'create', 'GET'],
            // '/admin/categories/store' => [self::class, 'store', 'POST'],
            // '/admin/categories/edit/{id}' => [self::class, 'edit', 'GET'],
        ];
    }

    public function databaseTableName(): string
    {
        return 'categories';
    }

    public function table(): array
    {
        return [
            TableText::make('id', 'ID'),
            TableText::make('name', 'Nome'),
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
