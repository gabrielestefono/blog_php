<?php

namespace App\Views\Pages\Admins\Classes;

use App\Classes\AdminBase;
use App\Classes\Components\Table\TableText;
use App\Classes\RouteClass;

class Posts extends AdminBase
{

    public function databaseTableName(): string
    {
        return 'posts';
    }

    public static function routes(): array
    {
        TableText::make('id', 'ID');
        return [
            '/admin/posts' => [self::class, 'listView', 'GET'],
            '/admin/posts/create' => [self::class, 'create', 'GET'],
            // '/admin/post/store' => [PostController::class, 'store', 'POST'],
            // '/admin/posts/edit/{id}' => [PostController::class, 'edit', 'GET'],
        ];
    }

    public function table(): array
    {
        return [
            TableText::make('id', 'ID'),
            TableText::make('title', 'Título'),
            TableText::make('author', 'Autor'),
            TableText::make('created_at', 'Criado em')
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
