<?php
$dll = new SplDoublyLinkedList();

$dll->push(1);
$dll->push(2);
$dll->push(3);
$n = $dll->pop();

print "$n\n";

$dll->unshift('a');
$dll->unshift('b');
$dll->unshift('c');
$c = $dll->shift();

print "$c\n";
?>
