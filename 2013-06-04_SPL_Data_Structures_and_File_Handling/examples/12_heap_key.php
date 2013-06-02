<?php
class MyHeap extends SplHeap
{
    final public function compare($a, $b)
    {
        if ($a > $b) {
            return 1;
        }
        if ($a < $b) {
            return -1;
        }

        return 0;
    }
}

$heap = new MyHeap();

if ($heap->isEmpty()) {
    echo "Empty\n";
}

for ($i = 1; $i <= 5; $i++) {
    $heap->insert($i);
}

foreach ($heap as $n) {
    echo $heap->key(), " - ", $n, "\n";
}

if ($heap->isEmpty()) {
    echo "Empty\n";
}

?>
