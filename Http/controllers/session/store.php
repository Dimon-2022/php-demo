<?php

use Core\App;
use Core\Database;
use Core\Validator;
use Http\Forms\LoginForm;

$db = App::resolve(Database::class);

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$form = new LoginForm();

if(!$form->validate($email, $password)){
        return view('sessions/create.view.php', [
        'errors' => $form->errors(),
    ]);
}

if (!empty($errors)) {
    return view('sessions/create.view.php', [
        'errors' => $errors,
    ]);
}

$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email,
])->find();

if (!$user) {
    if (password_verify($password, $user['password'])) {
        login([
            'email' => $email,
        ]);
        header('location: /');
        exit;
    }
}

return view('session/create.view.php',
    [
        'errors' => [
            'email' => 'No matching account found for that email adress and password',
        ],
    ]);

dd('Submit the form');
