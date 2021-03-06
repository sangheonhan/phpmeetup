<?php
class MyPriorityQueue extends SplPriorityQueue
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

$pq = new MyPriorityQueue();

for ($i = 1; $i <= 5; $i++) {
    $pq->insert(rand(1, 100), $i);
}

$pq->setExtractFlags(SplPriorityQueue::EXTR_BOTH);

foreach ($pq as $n) {
    print_r($n);
}

?>
