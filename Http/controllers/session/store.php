<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;

// receive credentials
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$form = new LoginForm();

if ($form->validate($email, $password)) {
    $auth = new Authenticator();

    if ($auth->attempt($email, $password)) {
        redirect('/');
    } else {
        $form->error('email', 'No matching account found for that email adress and password');
    }
}

Session::flash('errors', $form->errors());
Session::flash('old',
    [
        'email' => $email,
    ]
);

return redirect('/login');
