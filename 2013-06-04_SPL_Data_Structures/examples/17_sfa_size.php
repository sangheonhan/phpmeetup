<?php
$fix = new SplFixedArray(10);

$fix[1] = 1;
$fix[2] = 2;
$fix[4] = 3;
$fix[5] = 4;
$fix[9] = 5;

echo "size = ", $fix->getSize(), "\n";

foreach ($fix as $n) {
    echo "$n\n";
}

echo "--\n";

$fix->setSize(15);
$fix[14] = 6;

foreach ($fix as $n) {
    echo "$n\n";
}

?>
