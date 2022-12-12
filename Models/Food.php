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

  public function getInfo()
  {
    $numberOfIngredients = count($this->ingredients);
    $basicInfo = parent::getInfo();
    $specificInfo = "Inoltre questo prodotto pesa $this->weight, è al gusto $this->flavor e ha $numberOfIngredients ingredienti";

    return "$basicInfo - $specificInfo";
  }
}
