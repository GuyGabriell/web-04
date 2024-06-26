<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lambdas-and-Flexibility-008</title>
</head>
<body>


<?php 


$books = [

  [
    'name' => 'Do Andriods Dream of Electric Sheep',
    'author' => 'Philip K. Dick',
    'releaseYear' => '1968',
    'purchaseUrl' => 'http://example.com'
  ],


  [
    'name' => 'Project Hail Mary',
    'author' => 'Andy Weir',
    'releaseYear' => '2021',
    'purchaseUrl' => 'http://example.com'
  ],



  [
    'name' => 'The Martians',
    'author' => 'Andy Weir',
    'releaseYear' => '2011',
    'purchaseUrl' => 'http://example.com'
  ],




];

/* filter by making the code more generic and flexible */

 function filter($items, $key, $value) {

  $filteredItems = [];


  foreach ($items as $item) {

    if ($item[$key] === $value) {

      $filteredItems[] = $item;


    }


  }

return $filteredItems;



}


  $filteredItems = filter($books, 'releaseYear', '1968');

?>

<ul>

   <?php foreach ($filteredItems as $book) : ?>

  <li>

    <a href="<?= $book['purchaseUrl'] ?>">
      <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
        
    </a>

  </li>

     
      <?php endforeach; ?>

</ul>



</body>
</html>