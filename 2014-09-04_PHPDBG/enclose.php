<?php

function prefix($s)
{
    $s = '<'.$s;

    return $s;
}

function postfix($s)
{
    $s = $s.'>';

    return $s;
}

function enclose($s)
{
    $s = postfix(prefix($s));

    return $s;
}

$s = 'bookworm';

echo enclose($s);
?>
