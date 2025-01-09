<?php

namespace App\Views\Pages\Admins\Classes;

use App\Classes\RouteClass;
use App\Classes\Components\Form\FormInput;
use App\Classes\Components\Table\TableText;
use App\Classes\Base\Admin\Classes\AdminBase;

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
            '/admin/posts/create' => [self::class, 'create', 'GET'],
            '/admin/posts/edit/{id}' => [self::class, 'edit', 'GET'],
        ];
    }

    public function form(): array
    {
        return [
            FormInput::make('title')
                ->setLabel('Título')
                ->setPlaceholder('Digite o título do post')
        ];
    }

    public function table(): array
    {
        return [
            TableText::make('id')
                ->setLabel('ID'),
            TableText::make('title')
                ->setLabel('Título'),
            TableText::make('author')
                ->setLabel('Autor'),
            TableText::make('created_at')
                ->setLabel('Data de Criacao'),
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
