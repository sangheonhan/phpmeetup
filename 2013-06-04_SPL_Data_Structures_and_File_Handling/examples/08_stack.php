<?php
$stack = new SplStack();

$stack->push(1);
$stack->push(2);
$stack->push(3);

$stack->setIteratorMode(
    SplDoublyLinkedList::IT_MODE_LIFO |
    SplDoublyLinkedList::IT_MODE_DELETE
);

$stack->rewind();
while ($stack->valid()) {
    $n = $stack->current();
    print "$n\n";

    $stack->next();
}

echo "Count: ", $stack->count(), "\n";

?>
