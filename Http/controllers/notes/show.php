<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$currentUserId = 1;

$id = $_GET['id'];

$query = 'SELECT * FROM notes WHERE id=:id';
$note = $db->query($query, ['id' => $id])->findOrFail();

authorize($note['user_id'] === $currentUserId);

view('notes/show.view.php', [
    'heading' => 'Note',
    'note' => $note,
]);
