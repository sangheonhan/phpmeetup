<?php

require_once 'Log.php';

$cfg = array(
    'append' => false,
    'locking' => true,
    'mode' => 0600,
    'dirmode' => 0700
);
$logger = Log::singleton('file', 'log/handler_file.log', 'factorial', $cfg);

$n = 10;
$factorial = 1;
for ($i = 1; $i <= $n; $i++) {
    $logger->log("f($i) = $factorial * $i");
    $factorial *= $i;
}
echo "factorial($n) = $factorial\n";

