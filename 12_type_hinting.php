<?php

function sum(int $value)
{
  echo $value + 10;
}
sum(10);

function array_test(array $values)
{
  foreach ($values as $value) {
    echo $value . "<br>";
  }
}
$values = ["Apple", "Banana"];
array_test($values);
