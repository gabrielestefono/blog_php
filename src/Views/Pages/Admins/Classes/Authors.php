<?php

namespace App\Views\Pages\Admins\Classes;

use App\Classes\AdminBase;
use App\Classes\RouteClass;

class Authors extends AdminBase
{
    public static function routes(): array
    {
        return [
            '/admin/authors' => [self::class, 'listView', 'GET'],
            '/admin/authors/create' => [self::class, 'create', 'GET'],
            // '/admin/authors/store' => [self::class, 'store', 'POST'],
            // '/admin/authors/edit/{id}' => [self::class, 'edit', 'GET'],
        ];
    }

    public function databaseTableName(): string
    {
        return 'authors';
    }

    public function table(): array
    {
        return [
            'id' => 'ID',
            'name' => 'Nome',
            'email' => 'Email',
            'created_at' => 'Criado em'
        ];
    }

    public function getTitle(): string
    {
        return 'Autores';
    }

    public static function registerSidebar(): array
    {
        return [
            new RouteClass('/admin/authors', 'Authors', true),
            new RouteClass('/admin/authors/create', 'Authors', false),
            new RouteClass('/admin/authors/edit/{id}', 'Authors', false),
        ];
    }
}
