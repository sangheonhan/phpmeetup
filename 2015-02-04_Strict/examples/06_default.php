<?php
function hello(string $name = "foobar")
{
    echo "Hello, {$name}\n";
}

hello("bookworm");
