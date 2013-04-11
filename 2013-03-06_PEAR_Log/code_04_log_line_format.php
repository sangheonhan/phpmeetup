<?php

require_once 'Log.php';

class Factorial
{
    static public function compute($n)
    {
        $n = 10;
        $factorial = 1;
        for ($i = 1; $i <= $n; $i++) {
            $GLOBALS['logger']->log("f($i) = $factorial * $i");
            $factorial *= $i;
        }
        echo "factorial($n) = $factorial\n";
    }
}

$line_format = array(
    'lineFormat' => '%{timestamp} %{ident} %{priority} %{message} %{file} '.
        '%{line} %{function} %{class}',
);

$logger = Log::singleton('file', 'log_line_format.log', 'factorial', 
    $line_format);

Factorial::compute(10);

$line_format = array('lineFormat' => '%1$s %2$s %3$s %4$s %5$s %6$s %7$s %8$s');

$logger = Log::singleton('file', 'log_line_format.log', 'factorial', 
    $line_format);

Factorial::compute(10);

