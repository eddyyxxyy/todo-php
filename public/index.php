<?php

declare(strict_types=1);

use App\Router\Router;

require_once './bootstrap.php';

try {
    $router = new Router();
    $data = $router->router();

    if (!check_data($data)) {
        throw new Exception('Page not found.', 404);
    }

    extract($data['data']);

    $view = $data['view'];
    $css = $data['css'];

    require VIEWS_PATH . '\\main_view.php';
} catch (\Exception $e) {
    var_dump($e->getMessage(), $e->getCode());
}
