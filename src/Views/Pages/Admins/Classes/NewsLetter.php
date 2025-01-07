<?php

namespace App\Views\Pages\Admins\Classes;

use App\Classes\AdminBase;
use App\Classes\RouteClass;

class Newsletter extends AdminBase
{
    public static function routes(): array
    {
        return [
            '/admin/newsletter' => [self::class, 'listView', 'GET'],
            // '/admin/newsletter/create' => [PostController::class, 'create', 'GET'],
            // '/admin/newsletter/store' => [PostController::class, 'store', 'POST'],
            // '/admin/newsletter/edit/{id}' => [PostController::class, 'edit', 'GET'],
        ];
    }

    public function databaseTableName(): string
    {
        return 'newsletter';
    }

    public function table(): array
    {
        return [
            'id' => 'ID',
            'name' => 'Nome',
            'email' => 'Email',
            'actions' => 'Ações',
        ];
    }

    public function getTitle(): string
    {
        return 'Newsletter';
    }

    public static function registerSidebar(): array
    {
        return [
            new RouteClass('/admin/newsletter', 'Newsletter', true),
            new RouteClass('/admin/newsletter/create', 'Newsletter', false),
            new RouteClass('/admin/newsletter/edit/{id}', 'Newsletter', false),
        ];
    }
}
