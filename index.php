<?php

use App\Config\BaseConfig;
/**
 * Arquivo _root_/index.php
 */
require_once __DIR__ . '/vendor/autoload.php';

set_exception_handler(function($exception) {
    var_dump($exception);
    die();
});

ob_end_clean();
ob_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

use App\Routes\Routes;

new BaseConfig();
Routes::routes();
