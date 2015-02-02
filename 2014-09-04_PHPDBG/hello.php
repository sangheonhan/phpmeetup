<?php

include 'Foobar.php';

use ModernPUG\Foobar as Foobar;

$bookworm = new Foobar('Han Sangheon');

echo "Hello. {$bookworm->name()}\n";
