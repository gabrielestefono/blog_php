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
    <!-- // TODO: Trocar esse favicon temporário -->
    <link rel="shortcut icon" href="<?php echo Config::getBaseUrl() . 'public/assets/icons/favicon.ico'; ?>" type="image/x-icon">
    <?php echo Assets::css();?>

    <!-- TODO: Fazer esses imports via npm -->
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" />

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
    <!-- TODO: Fazer esses imports via npm -->
    <!-- Choices.js -->
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Easy MarkDown Editor -->
    <script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script>
    <?php echo Assets::js(); ?>
</body>

</html>
