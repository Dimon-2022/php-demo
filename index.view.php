<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo</title>
</head>

<body>
<h1>Recomended books:</h1>
<ul>
  <?php
foreach ($filteredBooks as $book) { ?>
    <li>
    <a href="<?php echo $book['purchaseUrl']; ?>"><?php echo $book['author']; ?></a>
      <?php echo $book['name']; ?>
    </li>
  <?php } ?>
 
</ul>


</body>

</html>