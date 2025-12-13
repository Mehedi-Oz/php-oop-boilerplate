<?php

class ParentClass
{
  public $name = "Name: Parent Class";
  public $address = "Parent Class Address";

  // Method to show name
  function show()
  {
    echo "Parent show(): $this->name <br>";
  }

  // Method to show address
  function overriding_method()
  {
    echo "Parent overriding_method(): $this->address <br>";
  }
}

class SubClass extends ParentClass
{
  public $name = "Name: Sub Class"; // Property overriding
  public $address = "Sub Class Address"; // Property overriding

  // Overriding method
  function show()
  {
    echo "SubClass show(): $this->name <br>"; // Uses SubClass property
    echo "Calling parent show(): ";
    parent::show(); // Calls parent method, but $this->name is still SubClass property
  }

  // Overriding method
  function overriding_method()
  {
    echo "SubClass overriding_method(): $this->address <br>"; // Uses SubClass property
    echo "Calling parent overriding_method(): ";
    parent::overriding_method(); // Calls parent method, but $this->address is still SubClass property
  }
}

$testing_subclass = new SubClass();
$testing_subclass->show(); // Calls the overridden show() method
$testing_subclass->overriding_method(); // Calls the overridden overriding_method()
