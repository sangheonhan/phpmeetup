<?php
function hello(string $name = null)
{
    echo "Hello, {$name}\n";
}

hello("bookworm");
