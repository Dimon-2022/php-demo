<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$id = $_POST['id'];
$query = 'SELECT * FROM notes WHERE id=:id';
$note = $db->query($query, ['id' => $id])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$query = 'DELETE FROM notes WHERE id=:id';
$db->query($query, ['id' => $id]);

header('location: /notes');
exit;
