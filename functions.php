<?php

function filterByAuthor($books, $authorName)
{
    $filteredBooks = [];

    foreach ($books as $book) {
      if($authorName === $book['author']){
        array_push($filteredBooks, $book);
      }
    }

    return $filteredBooks;
}
