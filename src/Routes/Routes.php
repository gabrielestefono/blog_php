<?php

/**
 * Arquivo _root_/src/Routes/Routes.php
 */
namespace App\Routes;

class Routes
{
    public static function routes()
    {
        $request_uri = $_SERVER['REQUEST_URI'];

        switch ($request_uri) {
            case '/':
                readfile(__DIR__ . '/../Views/index.php');
                break;
            case '/post':
                readfile(__DIR__ . '/../Views/post.php');
                break;
            default:
                readfile(__DIR__ . '/../Views/404.php');
                break;
        }
    }
}
