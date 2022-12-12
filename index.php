<?php

require __DIR__ . '/Models/Category.php';
require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/Food.php';
require __DIR__ . '/Models/Toy.php';
require __DIR__ . '/Models/Medicine.php';


$test = new Food('Pasta', 111, 'Marca X', 12.50, new Category('Cibo'), 120, ['ingrediente1, ingrediente2, ingrediente3'], 'Pie Flavor');


var_dump($test);
