<?php

namespace App\Helpers;

use App\Routes\Routes;

// TODO: Documentar essa classe

class Assets
{
    public static function css(): string
    {
        $filename = Routes::getTypeRoute() === 'admin' ? 'admin.css' : 'visitor.css';
        $cssPath = $_SERVER['DOCUMENT_ROOT'] . "/public/assets/css/$filename";
        if (file_exists($cssPath)) {
            return "<link rel=\"stylesheet\" href=\"/public/assets/css/$filename\">";
        }
        return '';
    }

    public static function js(): string
    {
        $filename = Routes::getTypeRoute() === 'admin' ? 'admin.js' : 'visitor.js';
        $jsPath = $_SERVER['DOCUMENT_ROOT'] . "/public/assets/js/$filename";
        if (file_exists($jsPath)) {
            return "<script type=\"module\" src=\"/public/assets/js/$filename\"></script>";
        }
        return '';
    }
}
