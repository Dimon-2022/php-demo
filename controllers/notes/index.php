<?php

$config = require 'config.php';
$db = new Database($config['database']);

$query = 'SELECT * FROM notes';
$notes = $db->query($query)->get();

$heading = 'My notes';

require 'views/notes/index.view.php';
