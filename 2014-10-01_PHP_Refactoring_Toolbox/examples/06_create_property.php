<?php

// <Leader>np
class Foobar
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function hello()
    {
        echo "Hello ".$this->name;
    }
}
?>
