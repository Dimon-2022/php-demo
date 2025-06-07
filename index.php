<?php

$books = [
    [
        'name' => 'Book 1',
        'author' => 'Author 1',
        'purchaseUrl' => 'https://unian2.net',
        'releaseYear' => 2002,
    ],
    [
        'name' => 'Book 2',
        'author' => 'Author 1',
        'purchaseUrl' => 'https://unian.net',
        'releaseYear' => 2002,
    ],
    [
        'name' => 'Book 3',
        'author' => 'Author 3',
        'purchaseUrl' => 'https://unian.net',
        'releaseYear' => 2003,
    ],
    [
        'name' => 'Book 1',
        'author' => 'Author 3',
        'purchaseUrl' => 'https://unian2.net',
        'releaseYear' => 1999,
    ],
    [
        'name' => 'Book 2',
        'author' => 'Author 4',
        'purchaseUrl' => 'https://unian.net',
        'releaseYear' => 1988,
    ],
    [
        'name' => 'Book 3',
        'author' => 'Author 5',
        'purchaseUrl' => 'https://unian.net',
        'releaseYear' => 2002,
    ],
    [
        'name' => 'Book 1',
        'author' => 'Author 6',
        'purchaseUrl' => 'https://unian.net',
        'releaseYear' => 2009,
    ],
    [
        'name' => 'Book 2',
        'author' => 'Author 7',
        'purchaseUrl' => 'https://unian.net',
        'releaseYear' => 2008,
    ],
    [
        'name' => 'Book 3',
        'author' => 'Author 8',
        'purchaseUrl' => 'https://unian.net',
        'releaseYear' => 2000,
    ],
];


$filteredBooks = array_filter($books, function($book){
    return $book['name']==='Book 1';
  });

  // var_dump($filteredBooks);
// die();

require "index.view.php";