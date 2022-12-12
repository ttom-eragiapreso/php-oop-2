<?php

class Medicine extends Product
{

  public $requiresPrescription;
  public $mainComponent;
  public $targetAnimal;

  public function __construct($_name, $_id, $_brand, $_price, $_category, $_requiresPrescription, $_mainComponent, $_targetAnimal)
  {
    parent::__construct($_name, $_id, $_brand, $_price, $_category,);

    $this->requiresPrescription = $_requiresPrescription;
    $this->mainComponent = $_mainComponent;
    $this->targetAnimal = $_targetAnimal;
  }
}
