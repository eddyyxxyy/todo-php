<?php

function set_flash(string $index, string $message): void
{
    if (!isset($_SESSION['flash'][$index])) {
        $_SESSION['flash'][$index] = $message;
    }
}

function get_flash(string $index, string $style = 'color: red')
{
    if (isset($_SESSION['flash'][$index])) {
        $flash = $_SESSION['flash'][$index];
        unset($_SESSION['flash'][$index]);

        return "<h3 style='$style'>$flash</h3>";
    }
}
