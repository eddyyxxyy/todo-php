<?php

declare(strict_types=1);

namespace App\Router;

use App\Core\Controller;

/**
 * Performs all controller@action calls based on predefined routes via GET or POST.
 */
class Router
{
    /**
     * All routes that can be accessed via GET or POST.
     *
     * @var array
     */
    private $routes = [
        'GET' => [
            '/' => 'Home@index',
            '/login' => 'Login@index',
            '/logout' => 'Login@logout',
            '/user/[0-9]+' => 'User@index',
            '/user/create' => 'User@register',
            '/user/remove' => 'User@unregister',
        ],
        'POST' => [
            '/login' => 'Login@store',
            '/user/register' => 'User@store',
        ]
    ];

    public function router()
    {
        $uri = filter_string_polyfill(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $routes = $this->routes;
        $request_method = $_SERVER['REQUEST_METHOD'];

        $matchedUri = $this->exactUriMatch($uri, $routes[$request_method]);

        if (!empty($matchedUri)) {
            return Controller::load($matchedUri);
        }
    }

    private function exactUriMatch(string $uri, array $route): array
    {
        return array_key_exists($uri, $route) ? [$uri => $route[$uri]] : [];
    }
}
