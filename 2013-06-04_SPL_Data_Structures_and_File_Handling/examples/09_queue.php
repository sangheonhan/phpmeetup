<?php
$queue = new SplQueue();

$queue->push(1);
$queue->push(2);
$queue->push(3);

$queue->setIteratorMode(
    SplDoublyLinkedList::IT_MODE_FIFO |
    SplDoublyLinkedList::IT_MODE_KEEP
);

foreach ($queue as $n) {
    print "$n\n";
}

echo "Count: ", $queue->count(), "\n";

?>
