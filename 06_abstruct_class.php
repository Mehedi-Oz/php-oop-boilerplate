<?php

/*
Rules of Abstract Classes in PHP:
1. An abstract class cannot be instantiated directly.
2. An abstract class can have both abstract methods (without implementation) and concrete methods (with implementation).
3. Any class inheriting from an abstract class must implement all its abstract methods.
4. Abstract methods cannot have a body (implementation) in the abstract class.
5. Abstract classes are used to define a blueprint for child classes.
6. A class that extends an abstract class can override its concrete methods if needed.
*/


abstract class Animal
{

  public function __construct()
  {
    echo ("This is from animal class constructor!. <br>");
  }

  abstract public function makeSound();
}

class Dog extends Animal
{
  public function makeSound()
  {
    echo ("Woof!!");
  }
}

$dog = new Dog();
$dog->makeSound();
