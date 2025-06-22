<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// validate form inputs

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email adress';
}

if (!Validator::string($password, 8, 12)) {
    $errors['password'] = 'Please provide a password of at least seven characters';
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors,
    ]);
}

$db = App::resolve(Database::class);

// check if the account already exists
$user = $db->query('SELECT * FROM users WHERE email=:email', [
    'email' => $email,
])->find();

if ($user) {
    // if yes, redirect to login page
    header('location: /');
    exit();
} else {
    // if not, save one to the database, and then log the user in,  and redirect

    $user = $db->query("INSERT INTO users (password, email) VALUES (:password, :email)", [
        'password'=>$password,
        'email'=>$email
    ]);

    //mark that the user has logged in

    $_SESSION['user'] = [
        'email' => $email,
    ];

    header('location: /');
    exit();

}
