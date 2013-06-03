<?php
$dll = new SplDoublyLinkedList();

$dll->push(1);
$dll->push(2);
$dll->push(3);

if ($dll->offsetExists(1)) {
    $n = $dll->offsetGet(1);        // 1, 2, 3
    echo "$n\n";

    $dll->offsetSet(1, $n * 10);    // 1, 20, 3
    $n1 = $dll->offsetGet(1);
    echo "$n1\n";
}

$dll->offsetUnset(1);
$dll->rewind();
while ($dll->valid()) {
    echo $dll->key(), "\n";         // 0 => 1, 1 => 3
    $dll->next();
}

?>
