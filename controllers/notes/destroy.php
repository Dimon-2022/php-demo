<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);
$currentUserId = 1;

$id = $_POST['id'];
$query = 'SELECT * FROM notes WHERE id=:id';
$note = $db->query($query, ['id' => $id])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$query = 'DELETE FROM notes WHERE id=:id';
$db->query($query, ['id' => $id]);

header('location: /notes');
exit;
