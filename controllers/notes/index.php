<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$query = 'SELECT * FROM notes';
$notes = $db->query($query)->get();

view('notes/index.view.php', [
    'heading' => 'My Notes',
    'notes' => $notes,
]);
