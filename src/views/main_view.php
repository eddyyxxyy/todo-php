<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon-16x16.png">
    <link rel="manifest" href="./assets/img/site.webmanifest">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href=<?php echo "./assets/css/{$css}"; ?>>
    <title><?php echo $title; ?></title>
    <script defer src="https://kit.fontawesome.com/a81368914c.js"></script>
    <?php if (isset($js) && $js !== '') : ?>
    <script defer src=<?= "./assets/js/{$js}"; ?>></script>
    <?php endif ; ?>
</head>
<body>
    <header id="main-nav">
        <?php require 'partials/nav-header.php'; ?>
    </header>
    <main>
        <?php require $view; ?>
    </main>
</body>
</html>
