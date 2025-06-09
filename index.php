<?php

require 'functions.php';
// require 'router.php';

// connect to MySQL database.
require 'Database.php';

$db = new Database();

$post = $db->query('SELECT * FROM posts WHERE id=1;');
