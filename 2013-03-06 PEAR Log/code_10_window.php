<!DOCTYPE html>
<html>
<body>
<?php

require_once 'Log.php';

$cfg = array('title' => 'Log Window');
$logger = Log::singleton('win', 'LogWindow', 'factorial', $cfg);

$n = 10;
$factorial = 1;
for ($i = 1; $i <= $n; $i++) {
    $logger->log("f($i) = $factorial * $i");
    $factorial *= $i;
}
echo "factorial($n) = $factorial\n";
?>
</body>
</html>
