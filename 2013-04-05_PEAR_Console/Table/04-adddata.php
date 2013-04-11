<?php

require_once 'Console/Table.php';

require_once 'factorial.php';

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

$data = array(
    array('*', '*'),
    array('*', '*'),
    array('*', '*'),
);

$table->addData($data, 1, 4);

echo $table->getTable();

?>
