<?php

namespace App\Helpers;

use App\Errors\ViewNotFoundException;

trait View
{
    private static array $components = [];

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

    public static function layout(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Components/Layout', $data);
    }

    public static function component(string $path, ?array $data = [])
    {
        self::$components[] = [
            'path' => $path,
            'data' => $data,
        ];
    }

    public static function renderComponents()
    {
        foreach (self::$components as $component) {
            self::includeFile($component['path'], 'Components', $component['data']);
        }
        self::$components = [];
    }
}
