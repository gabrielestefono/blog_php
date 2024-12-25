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

    public static function adminView(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Views/Pages/Admins', $data);
    }

    public static function errorView(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Views/Pages/Errors', $data);
    }

    public static function layoutView(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Views/Layouts', $data);
    }

    public static function pagesView(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Views/Pages', $data);
    }

    public static function componentLayoutAdmin(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Components/Layout/Admin', $data);
    }

    public static function componentLayoutVisitor(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Components/Layout/Visitor', $data);
    }

    public static function componentShared(string $path, ?array $data = [])
    {
        self::includeFile($path, 'Components/Shared', $data);
    }

    // public static function layout(string $path, ?array $data = [])
    // {
    //     self::includeFile($path, 'Components/Layout/Visitor', $data);
    // }

    // public static function adminLayout(string $path, ?array $data = [])
    // {
    //     self::includeFile($path, 'Components/Layout/Admin', $data);
    // }

    public static function componentChild(string $path, ?array $data = [])
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
