<?php

/**
 * Checks if `$_SESSION[LOGGED]` is set and then returns its string.
 *
 * @return object
 */
function user(): object
{
    if (isset($_SESSION[LOGGED])) {
        return $_SESSION[LOGGED];
    }
}

/**
 * Checks if `$_SESSION[LOGGED]` is set and returns a boolean.
 *
 * @return bool
 */
function logged(): bool
{
    return isset($_SESSION[LOGGED]);
}
