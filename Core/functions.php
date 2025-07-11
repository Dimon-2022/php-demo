<?php

use Core\Response;

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    exit;
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

function abort($code = 404)
{
    http_response_code($code);
    view("{$code}.php");

    exit;
}

function base_path($path)
{
    return BASE_PATH.$path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require base_path('views/'.$path);
}

function redirect($path)
{
    header("location: $path");
    exit;
}

function old($key, $default = '')
{
   return Core\Session::get('old')[$key] ?? $default;
}
