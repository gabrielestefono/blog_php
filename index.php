<?php
/**
 * Arquivo _root_/index.php
 */
require_once __DIR__ . '/vendor/autoload.php';

ob_end_clean();
ob_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

use App\Routes\Routes;

Routes::routes();
