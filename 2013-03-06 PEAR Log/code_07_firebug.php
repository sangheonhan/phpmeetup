<!DOCTYPE html>
<html>
<body>
<?php
require_once 'Log.php';

$logger = Log::singleton('firebug', '', 'factorial');

$n = 10;
$factorial = 1;
for ($i = 1; $i <= $n; $i++) {
    $logger->log("f($i) = $factorial * $i");
    $factorial *= $i;
}
$logger->emerg('Firebug - Emergency');
$logger->alert('Firebug - Alert');
$logger->crit('Firebug - Critical');
$logger->err('Firebug - Error');
$logger->warning('Firebug - Warning');
$logger->notice('Firebug - Notice');
$logger->info('Firebug - Information');
$logger->debug('Firebug - Debug');

echo "factorial($n) = $factorial\n";
?>
</body>
</html>
