<?php

class Employee
{
  public $name;
  public $age;
  public $salary;

  function __construct($name, $age, $salary)
  {
    $this->name = $name;
    $this->age = $age;
    $this->salary = $salary;
  }

  function info()
  {
    echo ("<h3>Employee Profile</h3>");
    echo ("Name: " . $this->name . "<br>");
    echo ("Age: " . $this->age . "<br>");
    echo ("Salary: " . $this->salary . "<br>");
  }
}

class Manager extends Employee
{
  public $phone = 1000;
  public $travel = 500;
  public $total_salary;

  function info()
  {
    $this->total_salary = $this->salary + $this->phone + $this->travel;

    echo ("<h3>Manager Profile</h3>");
    echo ("Name: " . $this->name . "<br>");
    echo ("Age: " . $this->age. "<br>");
    echo ("Salary: " . $this->total_salary . "<br>");
  }
}

$employee_01 = new Employee("employee_01", 25, 10000);
$manager_01 = new Manager("manager_01", 27, 15000);

$employee_01->info();
$manager_01->info();
