<?php

const BASE_PATH = __DIR__.'/../';

var_dump('test');

require BASE_PATH.'functions.php';
// connect to MySQL database.

spl_autoload_register(function ($class) {
    require base_path("Core/" . $class.'.php');
});

require base_path('router.php');
