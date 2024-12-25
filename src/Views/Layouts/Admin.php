<?php

use App\Helpers\View; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Admin</title>
    <?php
        // Load CSS
        $cssPath = $_SERVER['DOCUMENT_ROOT'] . '/public/assets/css/entrypoint-admin.css';
        if (file_exists($cssPath)) {
            echo '<link rel="stylesheet" href="/public/assets/css/entrypoint-admin.css">';
        }
    ?>

    <!-- Admin LTE 3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="dark-mode layout-fixed">
    <div class="wrapper">
        <?php View::componentLayoutAdmin('Header/Header.php') ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <?php
        // Load JS
        $jsPath = $_SERVER['DOCUMENT_ROOT'] . '/public/assets/js/entrypoint-admin.js';
        if (file_exists($jsPath)) {
            echo '<script type="module" src="/public/assets/js/entrypoint-admin.js"></script>';
        }
    ?>
</body>

</html>