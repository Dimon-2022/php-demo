<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$currentUserId = 1;

$id = $_POST['id'];
$body = $_POST['body'];

$query = 'SELECT * FROM notes WHERE id=:id';
$note = $db->query($query, ['id' => $id])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$errors = [];

if (!Validator::string($body, 1, 1000)) {
    $errors['body'] = 'A body of no more than 1000 characters is required';
}




if (count($errors)) {
    return view('notes/edit.view.php', ['errors' => $errors,'heading' => 'Edit Note','note' => $note,]);
}

$db->query('UPDATE notes SET body = :body WHERE id=:id', ['id'=>$id, 'body'=>$body]);

header('location: /notes');
die();