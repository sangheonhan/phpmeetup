<?php
$a = 'hello';
$b = &$a;
$c = $a;

xdebug_debug_zval('a');
xdebug_debug_zval('b');
xdebug_debug_zval('c');

$a = 'goodbye';
xdebug_debug_zval('a');
xdebug_debug_zval('b');
xdebug_debug_zval('c');
?>
