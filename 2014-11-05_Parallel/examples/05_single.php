<?php

function sum($n)
{
    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }

    return $sum;
}

$values = array();
foreach ([10000000, 30000000, 50000000] as $n) {
    $values[] = sum($n);
}

var_dump($values);
