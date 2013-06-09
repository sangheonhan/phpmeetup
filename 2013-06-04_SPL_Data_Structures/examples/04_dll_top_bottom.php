<?php
$dll = new SplDoublyLinkedList();

$dll->push(1);
$dll->push(2);
$dll->push(3);

echo "top: ", $dll->top(), "\n";        // 3
echo "bottom: ", $dll->bottom(), "\n";  // 1

?>
