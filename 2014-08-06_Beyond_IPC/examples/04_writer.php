<?php

$rw = new SyncReaderWriter('foobar');

var_dump($rw->writelock());
var_dump($rw->writeunlock());

?>
