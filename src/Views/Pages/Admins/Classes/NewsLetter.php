<?php

namespace App\Views\Pages\Admins\Classes;

use App\Classes\RouteClass;
use App\Classes\Components\Table\TableText;
use App\Classes\Base\Admin\Classes\AdminBase;

class Newsletter extends AdminBase
{
    public static function routes(): array
    {
        return [
            '/admin/newsletter' => [self::class, 'listView', 'GET'],
            '/admin/newsletter/create' => [self::class, 'create', 'GET'],
            '/admin/newsletter/edit/{id}' => [self::class, 'edit', 'GET'],
        ];
    }

    public function databaseTableName(): string
    {
        return 'newsletter';
    }

    public function form(): array
    {
        return [];
    }

    public function table(): array
    {
        return [
            TableText::make('id')
                ->setLabel('ID'),
            TableText::make('name')
                ->setLabel('Nome'),
            TableText::make('email')
                ->setLabel('E-mail'),
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
