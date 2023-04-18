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
    <link rel="stylesheet" href=<?php echo "./assets/css/{$css}"; ?>>
    <title><?php echo $title; ?></title>
</head>
<body>
    <nav class="navbar">
        <div class="logo">ToDo</div>
        <ul class="nav-links">
            <input type="checkbox" id="checkbox_toggle">
            <label for="checkbox_toggle" class="hamburguer">&#9776;</label>
        </ul>
        <div class="menu">
            <li><a href="/">Home</a></li>
            <li><a href="/">About</a></li>
            <li class="tasks">
                <a href="/">Options</a>
                <ul class="dropdown">
                    <?php if (!LOGGED) : ?>
                        <li><a href="/">Login</a></li>
                        <li><a href="/">Register</a></li>
                    <?php else : ?>
                        <li><a href="/">My Tasks</a></li>
                        <li><a href="/">Profile</a></li>
                        <li><a href="/">Logout</a></li>
                    <?php endif ; ?>
                </ul>
            </li>
            <li><a href="/">Contact</a></li>
        </div>
    </nav>
</body>
</html>
