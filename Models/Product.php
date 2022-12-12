<?php

class Product
{
  public $name;
  public $id;
  public $brand;
  public $price;
  public $isAvailable = true;
  public $category;

  public function __construct($_name, $_id, $_brand, $_price, Category $_category)
  {
    $this->name = $_name;
    $this->id = $_id;
    $this->brand = $_brand;
    $this->price = $_price;
    $this->category = $_category;
  }

  public function getBasicInfo()
  {

    return "Questo prodotto si chiama $this->name, ha un id=$this->id, costa $this->price, la marca è $this->brand, e ha disponilità $this->isAvailable";
  }

  public function setAvailability($yes)
  {
    $output = '';
    if ($yes) $this->isAvailable = true;
    else $this->isAvailable = false;

    $this->isAvailable ? $output = 'Disponibile' : $output =  'Non disponibile';

    return $output;
  }
}
