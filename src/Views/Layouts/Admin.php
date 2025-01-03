<?php use App\Helpers\View; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Admin</title>
    <?php
    // Load CSS
    $cssPath = $_SERVER['DOCUMENT_ROOT'] . '/public/assets/css/entrypoint2.css';
    if (file_exists($cssPath)) {
        echo '<link rel="stylesheet" href="/public/assets/css/entrypoint2.css">';
    }
    ?>

    <!-- Admin LTE 3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" />

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Choices.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">

    <!-- Easy MarkDown Editor -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css"/>
</head>

<body class="layout-fixed admin">
    <div class="wrapper">
        <?php View::componentLayoutAdmin('Header/Header.php') ?>
        <div class="preloader">
            <span>Carregando a página!</span>
        </div>
        <div class="content-wrapper h-100">
            <?php View::renderComponents() ?>
        </div>
    </div>
    <!-- Choices.js -->
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Admin LTE -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <!-- Easy MarkDown Editor -->
    <script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
    // Load JS
    $jsPath = $_SERVER['DOCUMENT_ROOT'] . '/public/assets/js/entrypoint3.js';
    if (file_exists($jsPath)) {
        echo '<script type="module" src="/public/assets/js/entrypoint3.js"></script>';
    }
    ?>
</body>

</html>
