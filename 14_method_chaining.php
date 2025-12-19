<?php

class Method_Chaining
{

  function first()
  {
    echo "This is from first method ";
    return $this;
  }

  function second()
  {
    echo "This is from second method ";
    return $this;
  }

  function third()
  {
    echo "This is from third method";
  }
}

$obj = new Method_Chaining();
$obj->first()->second()->third();
