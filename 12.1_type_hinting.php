<?php

/*
Type Hinting in PHP:
1. Type hinting allows you to specify the expected data type for function/method parameters.
2. It helps catch errors early by ensuring the correct type is passed.
3. You can type hint classes, interfaces, arrays, and scalar types (int, string, etc.).
4. If the wrong type is passed, PHP throws a TypeError.
*/

//===========================
// Simple class with a method
//===========================

class Hello
{
  public function sayhello()
  {
    echo "Hello Everyone". "<br>";
  }
}

// Another class with a different method
class Bye
{
  public function saybye()
  {
    echo "Bye Everyone" . "<br>";
  }
}

// Function with type hinting: only accepts Hello class objects
function greetings_type_hinting(Hello $test_class)
{
  $test_class->sayhello();
}

// Example usage: passing a Hello object (works)
$test = new Hello();
greetings_type_hinting($test); // Outputs: Hello Everyone

// greetings_type_hinting(new Bye()); // Uncomment to see the error

//======================================================
// Another example: type hinting with class dependency
//======================================================

class School
{
  // Type hinting: only accepts Student class objects
  public function getNames(Student $names)
  {
    foreach ($names->Names() as $name) {
      echo $name . " ";
    }
  }
}

class Student
{
  // Returns an array of names
  public function Names()
  {
    return ["Muhammad", "Mehedi", "Hasan"];
  }
}

// Example usage
$test_student = new Student();
$test_school = new School();
$test_school->getNames($test_student); // Outputs: Muhammad Mehedi Hasan
