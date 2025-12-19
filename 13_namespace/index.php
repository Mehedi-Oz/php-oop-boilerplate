<?php

require 'product.php';
require 'testing.php';

$obj_product_1 = new product_namespace\Product();
$obj_product_2 = new testing_namespace\Product();


function testing_dummy_function()
{
  echo "This is From index_testing_dummy_function";
}

$obj_product_3 = new product_namespace\Product();
product_namespace\product_testing_dummy_function();
