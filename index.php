<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo</title>
</head>

<body>

<?php
$books = [
  [
    'name' => 'Book 1',
    'author' => 'Author 1',
    'purchaseUrl' => 'https://unian.net',
  ],
   [
    'name' => 'Book 2',
    'author' => 'Author 2',
    'purchaseUrl' => 'https://unian.net',
  ],
   [
    'name' => 'Book 3',
    'author' => 'Author 3',
    'purchaseUrl' => 'https://unian.net',
  ]

];
?>

<h1>Recomended books:</h1>
<ul>
  <?php
  foreach($books as $book):?>
    <li>
    <a href="<?php echo $book['purchaseUrl'];?>"><?php echo $book['author'];?></a>
      <?php echo $book['name'];?>
    </li>
  <?php endforeach; ?>
 
</ul>


</body>

</html>