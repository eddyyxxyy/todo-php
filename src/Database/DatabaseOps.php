<?php

declare(strict_types=1);

namespace App\Database;

class DatabaseOps
{
    public static function connect()
    {
        return new \PDO("");
    }
}
