<?php

require_once 'Log.php';

$cfg = array('buffering' => true);
$logger = Log::singleton('console', '', 'factorial', $cfg);

$n = 10;
$factorial = 1;
for ($i = 1; $i <= $n; $i++) {
    $logger->log("f($i) = $factorial * $i");
    $factorial *= $i;
}
echo "factorial($n) = $factorial\n";

echo "Sleep for 2 seconds.\n";
sleep(2);
$logger->close();

