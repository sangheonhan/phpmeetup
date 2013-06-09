<?php
class MyMinHeap extends SplMinHeap
{
}

$heap = new MyMinHeap();

for ($i = 1; $i <= 5; $i++) {
    $heap->insert(rand(1, 100));
}

foreach ($heap as $n) {
    echo "$n\n";
}

?>
