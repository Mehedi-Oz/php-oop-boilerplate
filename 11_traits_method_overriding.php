<?php

/*
Traits and Method Overriding in PHP:
1. Traits allow code reuse in multiple classes.
2. If a class uses a trait and defines a method with the same name, the class's method overrides the trait's method.
3. You can explicitly resolve conflicts between traits using the `insteadof` and `as` operators.

Priority Rules:
- Methods in the class take precedence over methods in traits.
- Methods in traits take precedence over methods in parent classes.
- Parent class methods are used only if no overriding method exists in the class or traits.
*/

trait GreetingTrait
{
  public function sayHello()
  {
    echo "Hello from Trait!<br>";
  }
}

class BaseClass
{
  public function sayHello()
  {
    echo "Hello from BaseClass!<br>";  
  }
}

class ChildClass extends BaseClass
{
  use GreetingTrait;

  // Overriding the trait method
  public function sayHello()
  {
    echo "Hello from ChildClass!<br>";
  }
}

// Example usage
$object = new ChildClass();
$object->sayHello(); // Outputs: Hello from ChildClass!

/*
Explanation:
- The `ChildClass` uses the `GreetingTrait` but overrides the `sayHello` method.
- The method in `ChildClass` takes precedence over the trait's method.
- The trait's method would take precedence over the `BaseClass` method if not overridden in `ChildClass`.
*/
