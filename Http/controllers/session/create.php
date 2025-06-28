<?php

use Core\Session;

view('session/create.view.php', [
    'errors' => 
    Session::get();
    $_SESSION['_flash']['errors'] ?? []
]);

