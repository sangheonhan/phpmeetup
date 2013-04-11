<?php
require_once 'Console/ProgressBar.php';

$bar = new Console_ProgressBar('%fraction% [%bar%] %percent% %elapsed% %estimate%', '=>', ' ', 80, 1000);
for ($i = 0; $i <= 1000; $i++) {
    $bar->update($i);
    usleep(5000);
}
echo "\n";
?>
