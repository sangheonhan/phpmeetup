<?php
class MyMinHeap extends SplMinHeap
{
    final public function compare($a, $b)
    {
        if ($a > $b) {
            return -1;
        }
        if ($a < $b) {
            return 1;
        }

        return 0;
    }
}

$heap = new MyMinHeap();

for ($i = 1; $i <= 5; $i++) {
    $heap->insert(rand(1, 100));
}

foreach ($heap as $n) {
    echo "$n\n";
}

?>
