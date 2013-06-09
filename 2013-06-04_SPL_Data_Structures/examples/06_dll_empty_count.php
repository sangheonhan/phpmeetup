<?php
$dll = new SplDoublyLinkedList();

if ($dll->isEmpty()) {
    echo "Empty\n";
}

$dll->push(1);
$dll->push(2);
$dll->push(3);

echo "Count: ", $dll->count(), "\n";

?>
