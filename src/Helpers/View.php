<?php

namespace App\Helpers;

use App\Errors\ViewNotFoundException;

trait View
{
    private static function includeFile(string $path, string $type, ?array $data = [])
    {
        if ($data) {
            extract($data);
        }

        $filePath = __DIR__ . "/../{$type}/" . ltrim($path, '/');
        if (file_exists($filePath)) {
            include $filePath; // NOSONAR
        } else {
            throw new ViewNotFoundException("View not found: {$filePath}");
        }
    }

    public static function view(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Views/Pages', $data);
    }

    public static function component(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Components', $data);
    }

    public static function layout(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Components/Layout', $data);
    }
}
