<?php

declare(strict_types=1);

namespace App\Controllers;

class Profile
{
    public function index()
    {
        return [
            'view' => 'profile.php',
            'css' => 'profile.css',
            'js' => '',
            'data' => [
                'title' => 'Profile ' . '| eddyyxxyy',
            ],
        ];
    }
}
