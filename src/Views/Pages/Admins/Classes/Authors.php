<?php

namespace App\Views\Pages\Admins\Classes;

use App\Classes\Components\Form\FormInput;
use App\Classes\RouteClass;
use App\Classes\Components\Table\TableText;
use App\Classes\Components\Table\TableImage;
use App\Classes\Base\Admin\Classes\AdminBase;

class Authors extends AdminBase
{
    public static function routes(): array
    {
        return [
            '/admin/authors' => [self::class, 'listView', 'GET'],
            '/admin/authors/create' => [self::class, 'create', 'GET'],
            '/admin/authors/edit/{id}' => [self::class, 'edit', 'GET'],
        ];
    }

    public function databaseTableName(): string
    {
        return 'authors';
    }

    public function form(): array
    {
        return [
            FormInput::make('name')
                ->setLabel('Nome')
                ->setPlaceholder('Nome do autor'),
            FormInput::make('email')
                ->setLabel('E-mail')
                ->setPlaceholder('E-mail do autor'),
        ];
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
            TableText::make('created_at')
                ->setLabel('Criado em'),
            TableImage::make('image')
                ->setLabel('Imagem'),
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
