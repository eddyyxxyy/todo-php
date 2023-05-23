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
            '/about' => 'About@index',
            '/login' => 'Login@index',
            '/logout' => 'Login@logout',
            '/user/[0-9]+' => 'Profile@index',
            '/user/create' => 'Profile@register',
            '/user/remove' => 'Profile@unregister',
        ],
        'POST' => [
            '/login' => 'Login@store',
            '/user/store' => 'Profile@store',
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

        $matchedUri = $this->dynamicUriMatch($uri, $routes[$request_method]);
        $params = $this->getParams($uri, $matchedUri);

        dd(Controller::load($matchedUri, $params));
    }

    private function exactUriMatch(string $uri, array $routes): array
    {
        return array_key_exists($uri, $routes) ? [$uri => $routes[$uri]] : [];
    }

    private function dynamicUriMatch(string $uri, array $routes)
    {
        return array_filter(
            $routes,
            function ($route) use ($uri) {
                $regex = str_replace('/', '\/', ltrim($route, '/'));
                return preg_match("/^$regex$/", ltrim($uri, '/'));
            },
            ARRAY_FILTER_USE_KEY
        );
    }

    private function getParams(string $uri, array $matchedUri)
    {
        $uri_exploded = explode('/', ltrim($uri, '/'));

        if (!empty($matchedUri)) {
            $params = array_diff(
                $uri_exploded,
                explode('/', ltrim(array_keys($matchedUri)[0], '/')),
            );
        } else {
            return $matchedUri;
        }

        $params_data = array();
        foreach ($params as $index => $param) {
            $params_data[$uri_exploded[$index - 1]] = $param;
        }

        return $params_data;
    }
}
