<?php

$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

$router->get('/notes', 'notes/index.php')->only('auth');//all notes 
$router->get('/note', 'notes/show.php');
$router->delete('/note', 'notes/destroy.php');//delete note 


$router->get('/notes/create', 'notes/create.php');//show form for creating note
$router->post('/notes', 'notes/store.php');//store note after hitting submit button on create form 


$router->get('/note/edit', 'notes/edit.php');//show edit form of note 

$router->patch('/note', 'notes/update.php');//update note after hiiting submit button on edit form

$router->get('/register', 'registration/create.php')->only('guest');

$router->post('/register', 'registration/store.php')->only('guest');

$router->get('/login', 'session/create.php')->only('guest');

$router->post('/session', 'session/store.php')->only('guest');

$router->delete('/session', 'session/destroy.php')->only('auth');