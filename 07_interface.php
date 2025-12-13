
<?php

/*
Rules of Interfaces in PHP:
1. Interfaces cannot have any method implementations, only method signatures.
2. All methods declared in an interface must be public.
3. A class that implements an interface must implement all of its methods.
4. A class can implement multiple interfaces, separating them with commas.
5. Interfaces cannot have properties (only constants are allowed).
6. Interfaces are used to define a contract for what methods a class must implement.
*/


// First interface declaring an addition contract
interface Parent_01
{
  public function addition($num1, $num2); // Must be public (default in interface)
}


// Second interface declaring a subtraction contract
interface Parent_02
{
  public function subtraction($num1, $num2); // Must be public (default in interface)
}


// Class implementing both interfaces
class DerivedClass implements Parent_01, Parent_02
{
  // Example properties (not required by interface)
  public $num1, $num2;

  // Implementing the addition method from Parent_01
  public function addition($num1, $num2)
  {
    echo ("Sum of the numbers are: " . ($num1 + $num2) . "<br>");
  }

  // Implementing the subtraction method from Parent_02
  public function subtraction($num1, $num2)
  {
    echo ("Difference of the numbers is: " . ($num1 - $num2) . "<br>");
  }
}


// Example usage
$obj = new DerivedClass();
$obj->addition(6, 5);      // Outputs: Sum of the numbers are: 11
$obj->subtraction(6, 5);   // Outputs: Difference of the numbers is: 1
