<?php

require_once 'Console/CommandLine.php';

$parser = new Console_CommandLine();
$parser->addOption('colors', array(
    'short_name'  => '-c',
    'long_name'   => '--colors',
    'description' => 'black or white',
    'help_name'   => 'COLORS',
    'action'      => 'List',
    'list'        => array('black', 'white'),
));
try {
    $result = $parser->parse();

    print_r($result->options);
    print_r($result->args);
} catch (Exception $e) {
    $parser->displayError($e->getMessage());
}
?> 
