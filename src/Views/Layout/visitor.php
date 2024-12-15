<?php use App\Helpers\View; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        /**
         * @var string $titulo
         * Título a ser mostrado em cada página
         */
        echo $titulo
            ?>
    </title>
    <?php
    $cssPath = $_SERVER['DOCUMENT_ROOT'] . '/public/assets/css/entrypoint.css';
    if (file_exists($cssPath)) {
        echo '<link rel="stylesheet" href="/public/assets/css/entrypoint.css">';
    } ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>
<body>
    <main class="main">
        <div class="content">
            <?php View::layout('Header/Header.php') ?>
            <?php View::renderComponents(); ?>
            <?php View::layout('Footer/Footer.php') ?>
        </div>
    </main>
    <?php
    $jsPath = $_SERVER['DOCUMENT_ROOT'] . '/public/assets/js/entrypoint.js';
    if (file_exists($jsPath)) {
        echo '<script type="module" src="/public/assets/js/entrypoint.js"></script>';
    } ?>
</body>
</html>
