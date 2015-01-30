<?php

use KzykHys\Parallel\Parallel;

require __DIR__."/vendor/autoload.php";

function sum($n)
{
    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }

    return $sum;
}

$parallel = new Parallel();
$values = $parallel->map(
    [10000000, 30000000, 50000000],
    'sum'
);

var_dump($values);
