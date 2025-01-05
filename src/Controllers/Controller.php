<?php

namespace App\Controllers;

use App\Errors\ViewNotFoundException;

class Controller
{

    private function includeFile(string $path, ?array $data = [])
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

    public function view(string $path)
    {
        $path = str_replace('.', '/', $path);
        self::includeFile("{$path}.php");
    }
}
