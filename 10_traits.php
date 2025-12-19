<?php

/*
Traits in PHP:
1. Traits are used to reuse code in multiple classes.
2. A trait is similar to a class, but it is intended to group methods for reuse.
3. Traits cannot be instantiated on their own.
4. Classes use traits with the `use` keyword.
5. Traits help avoid duplication and enable code sharing between classes.
*/

trait grettings
{
  // Method provided by the trait
  public function sayHello()
  {
    echo ("Hello World!" . "<br>");
  }
}

// Class using the trait
class First_Test
{
  use grettings; // Include the trait's methods in this class
}

// Another class using the same trait
class Second_Test
{
  use grettings; // Include the trait's methods in this class
}

// Example usage
$check_test_01 = new First_Test();
$check_test_01->sayHello(); // Outputs: Hello World!

$check_test_02 = new Second_Test();
$check_test_02->sayHello(); // Outputs: Hello World!
