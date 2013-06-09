<?php
$dll = new SplDoublyLinkedList();

$dll->push(1);
$dll->push(2);
$dll->push(3);

$dll->rewind();
while ($dll->valid()) {
    $n = $dll->current();
    print "$n\n";

    $dll->next();
}

?>
