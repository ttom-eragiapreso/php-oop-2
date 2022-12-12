<?php

class Medicine extends Product
{

  private $requiresPrescription;
  public $mainComponent;
  public $targetAnimal;

  public function __construct($_name, $_id, $_brand, $_price, $_category, $_requiresPrescription, $_mainComponent, $_targetAnimal)
  {
    parent::__construct($_name, $_id, $_brand, $_price, $_category,);

    $this->requiresPrescription = $_requiresPrescription;
    $this->mainComponent = $_mainComponent;
    $this->targetAnimal = $_targetAnimal;
  }

  public function getInfo()
  {
    $output = $this->requiresPrescription ? 'Richiede la ricetta' : 'Non richiede la ricetta';
    $basicInfo = parent::getInfo();
    $specificInfo = "Inoltre questo prodotto $output, il principio attivo è: $this->mainComponent, ed è fatta per l'animale: $this->targetAnimal";

    return "$basicInfo - $specificInfo";
  }
}
