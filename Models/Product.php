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
}
