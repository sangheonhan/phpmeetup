<?php

require_once 'Log.php';

error_reporting(E_ALL & ~(E_STRICT | E_NOTICE));

$cfg = array(
    'dsn' => 'mysql://bookworm@localhost/test',
);
$logger = Log::singleton('sql', 'log_table', 'factorial', $cfg);

$n = 10;
$factorial = 1;
for ($i = 1; $i <= $n; $i++) {
    $logger->log("f($i) = $factorial * $i");
    $factorial *= $i;
}
echo "factorial($n) = $factorial\n";

