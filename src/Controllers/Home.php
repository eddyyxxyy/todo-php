<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Database\DatabaseOps;

class Home
{
    public function index(array $params)
    {
        return [
            'view' => 'home.php',
            'css' => 'home.css',
            'data' => [
                'title' => 'ToDo FlashCards | eddyyxxyy',
            ],
        ];
    }
}
