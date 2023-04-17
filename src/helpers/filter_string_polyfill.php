<?php

declare(strict_types=1);

/**
 * Filters strings to prevent XSS and SQL Injection.
 *
 * @param string $string String to be filtered.
 *
 * @return string The filtered string.
 */
function filter_string_polyfill(string $string): string
{
    $str = preg_replace('/\x00|<[^>]*>?/', '', $string);
    return str_replace(["'", '"'], ['&#39;', '&#34;'], $str);
}
