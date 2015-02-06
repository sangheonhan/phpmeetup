<?php
function hello(resource $fh)
{
    fprintf($fh, "Hello, world!\n");
}

hello(STDOUT);
hello("php://stdout");
