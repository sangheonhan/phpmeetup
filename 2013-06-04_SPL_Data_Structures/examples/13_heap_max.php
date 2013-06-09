<?php
class MyMaxHeap extends SplMaxHeap
{
}

$heap = new MyMaxHeap();

for ($i = 1; $i <= 5; $i++) {
    $heap->insert(rand(1, 100));
}

foreach ($heap as $n) {
    echo "$n\n";
}

?>
