<?php

require_once 'Log.php';

class MyLog extends Log
{
    static public function instance()
    {
        return Log::singleton('console', '', 'factorial');
    }
}

class Factorial
{
    static public function compute($n)
    {
        $factorial = 1;
        for ($i = 1; $i <= $n; $i++) {
            MyLog::instance()->log("f($i) = $factorial * $i");
            $factorial *= $i;
        }
        echo "factorial($n) = $factorial\n";

        return $factorial;
    }
}

Factorial::compute(10);

