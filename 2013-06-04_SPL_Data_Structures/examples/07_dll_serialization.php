<?php
$dll = new SplDoublyLinkedList();

$dll->push(1);
$dll->push(2);
$dll->push(3);

echo $dll->serialize(), "\n";

$dll->unserialize('i:0;:s:1:"a";:s:1:"b";:s:1:"c";');

foreach ($dll as $n) {
    print "$n\n";
}

?>
