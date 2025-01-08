<?php

namespace App\Views\Pages\Admins\Classes;

use App\Classes\AdminBase;
use App\Classes\Components\Table\TableText;
use App\Classes\RouteClass;

class Newsletter extends AdminBase
{
    public static function routes(): array
    {
        return [
            '/admin/newsletter' => [self::class, 'listView', 'GET'],
            '/admin/newsletter/create' => [self::class, 'create', 'GET'],
            // '/admin/newsletter/store' => [self::class, 'store', 'POST'],
            // '/admin/newsletter/edit/{id}' => [self::class, 'edit', 'GET'],
        ];
    }

    public function databaseTableName(): string
    {
        return 'newsletter';
    }

    public function table(): array
    {
        return [
            TableText::make('id', 'ID'),
            TableText::make('name', 'Nome'),
            TableText::make('email', 'Email'),
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
