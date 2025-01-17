<?php

namespace App\Controllers;

use App\Config\Config;
use App\Errors\ViewNotFoundException;

class Controller
{

    private static function includeFile(string $path, ?array $data = [])
    {
        if ($data) {
            extract($data);
        }

        $filePath = __DIR__ . "/../Views/" . ltrim($path, '/');
        if (file_exists($filePath)) {
            require_once $filePath; // NOSONAR
        } else {
            throw new ViewNotFoundException("View not found: {$filePath}");
        }
    }

    public static function view(string $path, ?array $data = [])
    {
        $path = str_replace('.', '/', $path);
        self::includeFile("{$path}.php", $data);
    }

    public function redirect(string $path)
    {
        header("Location: " . Config::getBaseUrl() . "{$path}");
        exit;
    }
}
