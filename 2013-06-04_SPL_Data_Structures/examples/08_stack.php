<?php
$stack = new SplStack();

$stack->push(1);
$stack->push(2);
$stack->push(3);

$stack->setIteratorMode(
    SplDoublyLinkedList::IT_MODE_LIFO |
    SplDoublyLinkedList::IT_MODE_DELETE
);

foreach ($stack as $n) {
    print "$n\n";
}

echo "Count: ", $stack->count(), "\n";

?>
