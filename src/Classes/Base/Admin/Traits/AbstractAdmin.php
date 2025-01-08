<?php

namespace App\Classes\Base\Admin\Traits;

trait AbstractAdmin
{
    abstract public static function routes(): array;

    abstract public function databaseTableName(): string;

    abstract public function form(): array;

    abstract public function table(): array;

    abstract public function getTitle(): string;

    abstract public static function registerSidebar(): array;
}
