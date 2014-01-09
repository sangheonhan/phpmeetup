<?php
$a = 'hello';
$b = $a;
xdebug_debug_zval('a');
xdebug_debug_zval('b');
unset($b);
xdebug_debug_zval('a');
xdebug_debug_zval('b');
?>
