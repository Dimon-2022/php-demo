<?php

$routes = require base_path('routes.php');

$requestURI = $_SERVER['REQUEST_URI'];

$parsedUrl = parse_url($requestURI);

function routeToController($parsedUrl, $routes)
{
    if (array_key_exists($parsedUrl['path'], $routes)) {
        require base_path($routes[$parsedUrl['path']]);
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    view("{$code}.php");

    exit;
}

routeToController($parsedUrl, $routes);
