<?php
$a = 'hello';
$b = &$a;
$c = &$b;
xdebug_debug_zval('a');
xdebug_debug_zval('b');
xdebug_debug_zval('c');
?>
