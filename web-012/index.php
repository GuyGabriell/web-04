<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Still-under-lambda-and-Function-012</title>
</head>
<body>



  <?php 


$books = [

  [
    'name' => 'Do Andriods Dream of Electric Sheep',
    'author' => 'Philip K. Dick',
    'releaseYear' => 1968,
    'purchaseUrl' => 'http://example.com'
  ],


  [
    'name' => 'Project Hail Mary',
    'author' => 'Andy Weir',
    'releaseYear' => 2021,
    'purchaseUrl' => 'http://example.com'
  ],



  [
    'name' => 'The Martians',
    'author' => 'Andy Weir',
    'releaseYear' => 2011,
    'purchaseUrl' => 'http://example.com'
  ],




];



  $filteredBooks = array_filter($books, function ($book) {

    //filtering by the author
   // return $book['author'] === 'Philip K. Dick';

   //filtering by the releaseYear 
    //return $book['releaseYear'] >= 2000;

    return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020;




  });




?>

<ul>

   <?php foreach ($filteredBooks  as $book) : ?>

  <li>

    <a href="<?= $book['purchaseUrl'] ?>">
      <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
        
    </a>

  </li>

     
      <?php endforeach; ?>

</ul>




    
  
</body>
</html>