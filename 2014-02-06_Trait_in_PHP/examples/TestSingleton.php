<?php

require 'Singleton.php';

class Foobar
{
    use Singleton;
}

$foo = Foobar::getInstance();
$bar = Foobar::getInstance();

var_dump($foo);
var_dump($bar);
?>
