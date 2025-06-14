<?php

$heading = 'Create Note';

$config = require 'config.php';
$db = new Database($config['database']);

$body = isset($_POST['body']) ? $_POST['body'] : '';

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    $errors = [];

    if (0 === strlen($_POST['body'])) {
        $errors['body'] = 'A body is required';
    }

    if (strlen($_POST['body']) >= 15) {
        $errors['body'] = 'Too many symbols';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes (body,user_id)
	VALUES (:body,:user_id)', ['body' => $body, 'user_id' => 1]);
    }
}

require 'views/note-create.view.php';
