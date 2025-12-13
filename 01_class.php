<?php
class Calculator
{
  public $num1, $num2, $result;

  function sum()
  {
    $this->result = $this->num1 + $this->num2;
    return $this->result;
  }

  function sub()
  {
    $this->result = $this->num1 - $this->num2;
    return $this->result;
  }
}

$obj = new Calculator();

$obj->num1 = 6;
$obj->num2 = 4;

echo $obj->sum();
echo "\n" . $obj->sub();
