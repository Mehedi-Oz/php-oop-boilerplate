<?php

class Person
{
  public $name;
  public $age;

  function __construct($name = "No Name", $age = 0)
  {
    $this->name = $name;
    $this->age = $age;
  }

  public function show()
  {
    echo ("Name: " . $this->name . "| Age: " . $this->age . "\n");
  }
}

$person_01 = new Person();
$person_02 = new Person("Hasan", 26);
$person_03 = new Person("Maha", 20);

$person_01->show();
$person_02->show();
$person_03->show();
