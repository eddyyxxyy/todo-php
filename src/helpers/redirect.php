<?php

function redirect(string $to): void
{
    header("Location: {$to}");
    return;
}
