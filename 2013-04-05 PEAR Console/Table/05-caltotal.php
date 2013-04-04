<?php

require_once 'Console/Table.php';

require_once 'factorial.php';

error_reporting(E_ALL ^ E_NOTICE);

$table = new Console_Table();

$table->setHeaders(array('n', 'equation', 'factorial(n)'));
$table->setAlign(0, CONSOLE_TABLE_ALIGN_CENTER);
$table->setAlign(1, CONSOLE_TABLE_ALIGN_LEFT);
$table->setAlign(2, CONSOLE_TABLE_ALIGN_RIGHT);

$equation = '1';
for ($n = 0; $n <= 10; $n++) {
    if ($n > 1) {
        $equation .= " * $n";
    }
    $table->addRow(array($n, $equation, factorial($n)));
}
$table->calculateTotalsFor(array(2));

echo $table->getTable();

?>
