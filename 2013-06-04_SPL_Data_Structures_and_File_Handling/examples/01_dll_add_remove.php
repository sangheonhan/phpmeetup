<?php
$dll = new SplDoublyLinkedList();

$dll->push(1);      // 1
$dll->push(2);      // 1, 2
$dll->push(3);      // 1, 2, 3
$n = $dll->pop();   // 1, 2 -> (3)

print "$n\n";

$dll->unshift('a'); // a, 1, 2
$dll->unshift('b'); // b, a, 1, 2
$dll->unshift('c'); // c, b, a, 1, 2
$c = $dll->shift(); // (c) <- b, a, 1, 2

print "$c\n";
?>
