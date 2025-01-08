<?php

namespace App\Views\Pages\Admins\Classes;

use App\Classes\AdminBase;
use App\Classes\Components\Form\FormInput;
use App\Classes\Components\Table\TableImage;
use App\Classes\Components\Table\TableText;
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
            TableText::make('id', 'ID'),
            TableText::make('name', 'Nome'),
            TableText::make('email', 'Email'),
            TableText::make('created_at', 'Criado em'),
            TableImage::make('image', 'Imagem'),
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
