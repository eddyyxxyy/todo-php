<?php

declare(strict_types=1);

namespace App\Core;

class Controller
{
    public static function load(array $matched_uri, array $params = [])
    {
        list($controller, $action) = explode('@', array_values($matched_uri)[0]);
        $controller_with_namespace = "App\\Controllers\\$controller";

        if (!class_exists($controller_with_namespace)) {
            throw new \Exception("Page not found.", 404);
        }

        $controller_instance = new $controller_with_namespace();

        if (!method_exists($controller_instance, $action)) {
            throw new \Exception("Page not found.", 404);
        }

        return $controller_instance->$action($params);
    }
}
