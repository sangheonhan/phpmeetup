<?php

$a = new SplFixedArray(5);

$a[0] = 1;
$a[1] = 2;
$a[2] = 3;
$a[3] = 4;
$a[4] = 5;

sort($a);
var_dump($a->toArray());

$b = new Judy(Judy::INT_TO_INT);

$b[0] = 1;
$b[1] = 2;
$b[2] = 3;
$b[3] = 4;
$b[4] = 5;

sort($b);
var_dump($b);

?>
