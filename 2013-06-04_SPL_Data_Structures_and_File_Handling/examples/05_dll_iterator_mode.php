<?php
$dll = new SplDoublyLinkedList();

$dll->push(1);
$dll->push(2);
$dll->push(3);

if (
    $dll->getIteratorMode() === 
    SplDoublyLinkedList::IT_MODE_FIFO | SplDoublyLinkedList::IT_MODE_KEEP
) {
    echo "FIFO & KEEP\n";
}

$dll->setIteratorMode(
    SplDoublyLinkedList::IT_MODE_LIFO | 
    SplDoublyLinkedList::IT_MODE_KEEP
);

$dll->rewind();
while ($dll->valid()) {
    $n = $dll->current();
    print "$n\n";

    $dll->next();
}

?>
