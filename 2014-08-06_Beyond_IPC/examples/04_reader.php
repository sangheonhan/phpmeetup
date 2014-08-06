<?php

$rw = new SyncReaderWriter('foobar');

var_dump($rw->readlock());
var_dump($rw->readunlock());

?>
