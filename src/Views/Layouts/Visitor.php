<?php
    use App\Helpers\Assets;
    use App\Helpers\View;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?>
    </title>
    <?php echo Assets::css(); ?>
</head>

<body class="visitor">
    <main class="main">
        <div class="content">
            <?php View::componentLayoutVisitor('Header/Header.php') ?>
            <?php View::renderComponents(); ?>
        </div>
        <?php View::componentLayoutVisitor('Footer/Footer.php') ?>
    </main>
    <?php echo Assets::js(); ?>
</body>

</html>
