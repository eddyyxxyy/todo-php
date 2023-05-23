<?php

declare(strict_types=1);

namespace App\Controllers;

class Login
{
    public function index()
    {
        return [
            'view' => 'login.php',
            'css' => 'login.css',
            'data' => [
                'title' => 'Login ' . '| eddyyxxyy',
            ],
        ];
    }
}
