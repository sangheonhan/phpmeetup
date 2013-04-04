<?php

require_once 'Console/CommandLine.php';

$parser = new Console_CommandLine();
$parser->addOption('debug', array(
    'short_name'  => '-d',
    'long_name'   => '--debug',
    'description' => 'debug mode',
    'help_name'   => 'DEBUG',
    'action'      => 'StoreTrue',
));
$parser->addOption('quite', array(
    'short_name'  => '-q',
    'long_name'   => '--quite',
    'description' => 'Quite mode',
    'help_name'   => 'QUITE',
    'default'     => true,
    'action'      => 'StoreFalse',
));
try {
    $result = $parser->parse();

    print_r($result->options);
    print_r($result->args);
} catch (Exception $e) {
    $parser->displayError($e->getMessage());
}
?> 
