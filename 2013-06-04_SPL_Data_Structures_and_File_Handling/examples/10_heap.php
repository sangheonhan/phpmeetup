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

for ($i = 1; $i <= 5; $i++) {
    $heap->insert($i);
}

while ($heap->valid()) {
    echo $heap->current(), "\n";
    $heap->next();
    $heap->rewind();    // No Operation
}

?>
