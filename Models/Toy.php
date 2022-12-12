<?php

class Toy extends Product
{
  public $feature;
  public $size;

  public function __construct($_name, $_id, $_brand, $_price, $_category, $_feature, $_size)
  {
    parent::__construct($_name, $_id, $_brand, $_price, $_category);

    $this->feature = $_feature;
    $this->size = $_size;
  }

  public function getInfo()
  {
    $basicInfo = parent::getInfo();
    $specificInfo = "Inoltre questo prodotto $this->feature, e ha una misura di: $this->size";

    return "$basicInfo - $specificInfo";
  }
}
