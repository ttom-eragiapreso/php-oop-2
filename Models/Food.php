<?php

class Food extends Product
{
  public $weight;
  public $ingredients;
  public $flavor;


  public function __construct($_name, $_id, $_brand, $_price, $_category, $_weight, $_ingredients, $_flavor)
  {
    parent::__construct($_name, $_id, $_brand, $_price, $_category);

    $this->weight = $_weight;
    $this->ingredients = $_ingredients;
    $this->flavor = $_flavor;
  }
}
