<?php

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/notes', 'controllers/notes/index.php');//all notes
$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/destroy.php');//delete note 


$router->get('/notes/create', 'controllers/notes/create.php');//show form for creating note
$router->post('/notes', 'controllers/notes/store.php');//store note after hitting submit button on create form 


$router->get('/note/edit', 'controllers/notes/edit.php');//show edit form of note 

$router->patch('/note', 'controllers/notes/update.php');//update note after hiiting submit button on edit form

$router->get('/register', 'controllers/registration/create.php');