<?php

/*
Rules of Static Members in PHP:
1. Static properties and methods belong to the class, not to any object instance.
2. Static members are accessed using ClassName::member syntax.
3. Static properties are shared among all instances of the class.
4. You cannot access static members using $this->; use self:: or ClassName:: inside the class.
5. Static methods can only access static properties and other static methods directly.
6. Static members can be public, protected, or private.
*/

// Example class with static property and static method
class Personal
{
  // Static property: shared by all instances and accessible via the class
  public static $name = "Hasan";

  // Static method: can be called without creating an object
  public static function show()
  {
    // Access static property using self::
    echo "Name: " . self::$name;
  }
}

//Best Practice - Always use the class name to access static members:
Personal::$name;  // Accessing static property (no output, just access)
Personal::show(); // Calling static method to display the name


// Example (Not Recommended, but Works):
$obj = new Personal();
echo $obj::$name;      // Access static property via object (works, but not recommended)
$obj::show();          // Call static method via object (works, but not recommended)
