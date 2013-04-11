<?php

require_once 'Console/CommandLine.php';

$parser = new Console_CommandLine(array('name' =>'head'));
$parser->description = 'Output the first part of files';
$parser->version = '1.0.0';
$parser->addOption('lines', array(
    'short_name'  => '-n',
    'long_name'   => '--lines',
    'description' => 'print the first K lines instead of the first 10',
    'help_name'   => 'LINES',
    'action'      => 'StoreInt'
));
$parser->addOption('bytes', array(
    'short_name'  => '-c',
    'long_name'   => '--bytes',
    'description' => 'print the first K bytes of each file',
    'help_name'   => 'BYTES',
    'action'      => 'StoreInt'
));
$parser->addArgument('files', array(
    'description' => 'print the first 10 lines of each FILE to standard output', 
    'multiple'    => true, 
    'help_name'   => 'FILE')
);
try {
    $result = $parser->parse();

    print_r($result->options);
    print_r($result->args);
} catch (Exception $e) {
    $parser->displayError($e->getMessage());
}
?> 
