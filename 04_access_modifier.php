<?php

// PUBLIC CLASS

class Testing_Public_Class
{
  public $name;

  // Public constructor: can be called from anywhere
  public function __construct($name)
  {
    $this->name = $name;
  }

  // Public method: can be called from anywhere
  public function show()
  {
    echo "Name: " . $this->name . "<br>";
  }
}

// Create an object and access public property and method
$public_test = new Testing_Public_Class("Hasan");
$public_test->name = "New_name_is_given"; // Public property can be changed from outside
$public_test->show(); // Public method can be called from outside

// PROTECTED CLASS

class Testing_Protected_Class
{
  protected $age;

  // Protected constructor: can only be called from this class or subclasses
  protected function __construct($age)
  {
    $this->age = $age;
  }

  // Protected method: can only be called from this class or subclasses
  protected function show_protected()
  {
    echo "Age: " . $this->age . "<br>";
  }
}

// Protected methods are accessible in derived classes, but not from outside.
class Testing_Protected_With_Derived extends Testing_Protected_Class
{
  // Public constructor: calls the protected parent constructor
  public function __construct($age)
  {
    parent::__construct($age); // Initialize the protected property in the parent class
  }

  // Public method: can access the protected method from the parent class
  public function show_protected_using_derived()
  {
    $this->show_protected(); // Call the protected method from the parent class
  }
}

// Correct usage: instantiate the derived class, not the base class
$protected_test = new Testing_Protected_With_Derived(20);
$protected_test->show_protected_using_derived(); // Access protected property via public method in subclass

// PRIVATE CLASS

class Testing_Private_Class
{
  private $salary;

  // Private constructor: can only be called from within this class
  private function __construct($salary)
  {
    $this->salary = $salary;
  }

  // Private method: can only be called from within this class
  private function show_private()
  {
    echo "Salary: " . $this->salary . "<br>";
  }

  // Public static method: allows controlled creation and usage of the private class
  public static function createAndShow($salary)
  {
    $obj = new self($salary); // Calls the private constructor
    $obj->show_private();     // Calls the private method
  }
}

// Correct usage: use the public static method to access private members
Testing_Private_Class::createAndShow(900);
