<?php

namespace App\Views\Pages\Admins\Classes;

use App\Classes\AdminBase;
use App\Classes\RouteClass;

class Posts extends AdminBase
{

    public function databaseTableName(): string
    {
        return 'posts';
    }

    public static function routes(): array
    {
        return [
            '/admin/posts' => [self::class, 'listView', 'GET'],
            // '/admin/posts/create' => [PostController::class, 'create', 'GET'],
            // '/admin/post/store' => [PostController::class, 'store', 'POST'],
            // '/admin/posts/edit/{id}' => [PostController::class, 'edit', 'GET'],
        ];
    }

    public function table(): array
    {
        return [
            'id' => 'ID',
            'title' => 'Título',
            'author' => 'Autor',
            'created_at' => 'Criado em',
            'actions' => 'Ações',
        ];
    }

    public function getTitle(): string
    {
        return 'Posts';
    }

    public static function registerSidebar(): array
    {
        return [
            new RouteClass('/admin/posts', 'Posts', true),
            new RouteClass('/admin/posts/create', 'Posts', false),
            new RouteClass('/admin/posts/edit/{id}', 'Posts', false),
        ];
    }
}
