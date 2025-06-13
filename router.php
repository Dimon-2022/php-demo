<?php

$routes = require 'routes.php';

$requestURI = $_SERVER['REQUEST_URI'];

$parsedUrl = parse_url($requestURI);
// dd($parsedUrl);



function routeToController($parsedUrl, $routes)
{
    if (array_key_exists($parsedUrl['path'], $routes)) {
        require $routes[$parsedUrl['path']];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";

    exit;
}

routeToController($parsedUrl, $routes);
