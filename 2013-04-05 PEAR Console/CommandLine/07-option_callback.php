<?php

require_once 'Console/CommandLine.php';

function nametoupper($value, $option, $result, $parser, $params=array())
{
    return strtoupper($value);
}

$parser = new Console_CommandLine();
$parser->addOption('name', array(
    'short_name'  => '-n',
    'long_name'   => '--name',
    'description' => 'name',
    'help_name'   => 'NAME',
    'action'      => 'Callback',
    'callback'    => 'nametoupper',
));
try {
    $result = $parser->parse();

    print_r($result->options);
    print_r($result->args);
} catch (Exception $e) {
    $parser->displayError($e->getMessage());
}
?> 
