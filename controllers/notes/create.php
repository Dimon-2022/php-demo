<?php

require 'Validator.php';

$heading = 'Create Note';

$config = require 'config.php';
$db = new Database($config['database']);

$body = $_POST['body'] ?? '';

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    $errors = [];

    if (!Validator::string($body, 1, 1000)) {
        $errors['body'] = 'A body of no more than 1000 characters is required';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes (body,user_id)
	VALUES (:body,:user_id)', ['body' => $body, 'user_id' => 1]);
    }
}

require 'views/notes/create.view.php';
