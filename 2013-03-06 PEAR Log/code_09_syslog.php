<?php

require_once 'Log.php';

$logger = Log::singleton('syslog', LOG_LOCAL0, 'factorial');

$n = 10;
$factorial = 1;
for ($i = 1; $i <= $n; $i++) {
    $logger->log("f($i) = $factorial * $i");
    $factorial *= $i;
}
echo "factorial($n) = $factorial\n";

