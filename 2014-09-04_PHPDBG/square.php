<?php

function square($n)
{
    return $n ** 2;
}

for ($i = 0; $i < 20; $i++) {
    $n = square($i);
    echo "$n\n";
}
