<?php

require __DIR__ . '/Models/Category.php';
require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/Food.php';
require __DIR__ . '/Models/Toy.php';
require __DIR__ . '/Models/Medicine.php';


$allProducts = [
  new Food('Pasta', 111, 'Marca X', 12.50, new Category('Cibo'), 120, ['ingrediente1, ingrediente2, ingrediente3'], 'Pie Flavor'),
  new Medicine('Tachipirina', 456, 'Marca Y', 20.99, new Category('Parafarmacia'), true, 'Paracetamolo', 'Dog'),
  new Toy('Pallina', 789, 'Marca Z', 2.5, new Category('Giocattolo'), 'Rimbalza', 4),
  new Medicine('Oki', 489, 'Marchio H', 15.45, new Category('Parafarmacia'), false, 'Boh', 'Umani')
];

$allProducts[2]->setAvailability(0);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous' />
  <title>Pet Shop</title>
</head>

<body>


  <div class="container">
    <div class="row">
      <?php foreach ($allProducts as $product) : ?>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><?php echo $product->name ?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><?php echo $product->category->name ?></h6>
              <p class="card-text fw-bold"><?php echo $product->getInfo() ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>


</body>

</html>