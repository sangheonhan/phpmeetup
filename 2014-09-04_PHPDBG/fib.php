<?php

function fib()
{
    $a = 0;
    $b = 1;

    while (true) {
        yield $a;

        list($a, $b) = array($b, $a + $b);
    }
}

foreach (fib() as $n) {
    echo "$n\n";
    if ($n >= INF) {
        break;
    }
}
