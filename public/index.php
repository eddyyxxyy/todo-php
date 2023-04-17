<?php

declare(strict_types=1);

use App\Router\Router;

require_once './bootstrap.php';

try {
    $router = new Router();

    $data = $router->router();

    var_dump($data);
} catch (\Exception $e) {
    var_dump($e->getMessage(), $e->getCode());
}
