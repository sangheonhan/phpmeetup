<?php

require_once 'Log.php';

$console = Log::singleton('console', '', 'factorial');
$file = Log::singleton('file', 'composite.log', 'factorial');

$logger = Log::singleton('composite');
$logger->addChild($console);
$logger->addChild($file);

$n = 10;
$factorial = 1;
for ($i = 1; $i <= $n; $i++) {
    $logger->log("f($i) = $factorial * $i");
    $factorial *= $i;
}
echo "factorial($n) = $factorial\n";

$logger->removeChild($console);
$logger->log("I'll be back.");

