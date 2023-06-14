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
            'js' => 'login.js',
            'data' => [
                'title' => 'Login ' . '| eddyyxxyy',
            ],
        ];
    }
}
