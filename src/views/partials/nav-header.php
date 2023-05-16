<a href="/"><img class="logo" src="./assets/img/android-chrome-512x512.png" alt="ToDo's app logo" height="50px"></a>
<?php echo "<nav>"; ?>
    <ul class="navlinks">
        <li><a href="/">Home</a></li>
        <li><a href=<?php echo "/user/{$user->id}" ?>>Profile</a></li>
        <li><a href="/about">About</a></li>
    </ul>
<?php echo "</nav>"; ?>
<a href="https://github.com/eddyyxxyy/todo-php" class="cta" target="_blank"><button>Source Code</button></a>
