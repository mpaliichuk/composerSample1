<?php
require_once '1.php';
require_once '2.php';
use alex\Order;
use john\Order as Sorting;
$obj1 = new Order();
$obj2 = new Sorting();
print_r($obj1);
print_r($obj2);

?>