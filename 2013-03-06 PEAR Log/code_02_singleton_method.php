<?php

require_once 'Log.php';

$logger = Log::singleton('file', 'singleton.log', 'factorial');

$n = 10;
$factorial = 1;
for ($i = 1; $i <= $n; $i++) {
    $logger->log("f($i) = $factorial * $i");
    $factorial *= $i;
}
echo "factorial($n) = $factorial\n";

