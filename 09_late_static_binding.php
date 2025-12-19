<?php

/*
Late Static Binding in PHP:
1. Late static binding refers to the use of the `static` keyword.
2. It resolves the called class based on runtime, not where defined.
3. Use `static::` instead of `self::` for late static binding.
4. Allow child classes to override static methods or properties.
5. Makes code more dynamic, reusable, and extensible.
*/

class ParentClass
{
  public static function who()
  {
    echo "I am the ParentClass\n";
  }

  public static function callWho()
  {
    // Late static binding: resolves to the runtime class
    static::who();
  }
}

class ChildClass extends ParentClass
{
  public static function who()
  {
    echo "I am the ChildClass\n";
  }
}

// Example usage
ParentClass::callWho(); // Outputs: I am the ParentClass
ChildClass::callWho();  // Outputs: I am the ChildClass
