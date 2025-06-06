<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo</title>
</head>

<body>

<?php
include_once './functions.php';

$books = [
    [
        'name' => 'Book 1',
        'author' => 'Author 1',
        'purchaseUrl' => 'https://unian.net',
    ],
    [
        'name' => 'Book 2',
        'author' => 'Author 1',
        'purchaseUrl' => 'https://unian.net',
    ],
    [
        'name' => 'Book 3',
        'author' => 'Author 3',
        'purchaseUrl' => 'https://unian.net',
    ],
    [
        'name' => 'Book 1',
        'author' => 'Author 3',
        'purchaseUrl' => 'https://unian.net',
    ],
    [
        'name' => 'Book 2',
        'author' => 'Author 4',
        'purchaseUrl' => 'https://unian.net',
    ],
    [
        'name' => 'Book 3',
        'author' => 'Author 5',
        'purchaseUrl' => 'https://unian.net',
    ],
    [
        'name' => 'Book 1',
        'author' => 'Author 6',
        'purchaseUrl' => 'https://unian.net',
    ],
    [
        'name' => 'Book 2',
        'author' => 'Author 7',
        'purchaseUrl' => 'https://unian.net',
    ],
    [
        'name' => 'Book 3',
        'author' => 'Author 8',
        'purchaseUrl' => 'https://unian.net',
    ],
];

?>

<h1>Recomended books:</h1>
<ul>
  <?php

  $filteredBooks = filterByAuthor($books, 'Author 3');
// var_dump($filteredBooks);
// die();

foreach ($filteredBooks as $book) { ?>
    <li>
    <a href="<?php echo $book['purchaseUrl']; ?>"><?php echo $book['author']; ?></a>
      <?php echo $book['name']; ?>
    </li>
  <?php } ?>
 
</ul>


</body>

</html>