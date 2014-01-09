<?php
$a = array('a' => 'hello', 'pi' => 3.141592);
$a['b'] = $a['a'];
unset($a['a'], $a['pi']);
xdebug_debug_zval('a');
?>
