<?php

use App\Helpers\View;
use App\Config\Config;
use App\Helpers\Assets;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Admin</title>
    <link rel="shortcut icon" href="<?php echo Config::getBaseUrl() . 'public/assets/icons/favicon.ico'; ?>" type="image/x-icon">
    <?php echo Assets::css(); ?>
</head>

<body class="layout-fixed admin">
    <div class="wrapper">
        <?php View::componentLayoutAdmin('Header/Header.php', ['sidebarList' => $sidebarList]) ?>
        <div class="preloader">
            <span>Carregando a página!</span>
        </div>
        <div class="content-wrapper h-100">
            <?php View::renderComponents() ?>
        </div>
    </div>
    <?php echo Assets::js(); ?>
</body>

</html>
