<?php

$config = require 'config.php';
$db = new Database($config['database']);
$heading = 'Note';
$id = $_GET['id'];

$query = 'SELECT * FROM notes WHERE id=:id';
$note = $db->query($query, ['id' => $id])->findOrFail();

$currentUserId = 1;

authorize($note['user_id'] === $currentUserId);

require 'views/notes/show.view.php';
