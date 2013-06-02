<?php
$a = array(1 => 1, 3 => 2, 5 => 3);
$fix = SplFixedArray::fromArray($a);

foreach ($fix as $k => $n) {
    echo "$k => $n\n";
}

echo "--\n";

$fix1 = SplFixedArray::fromArray($a, false);

foreach ($fix1 as $k => $n) {
    echo "$k => $n\n";
}

echo "--\n";

var_dump($fix->toArray());

?>
