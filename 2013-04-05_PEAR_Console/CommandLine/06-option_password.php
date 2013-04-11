<?php

require_once 'Console/CommandLine.php';

$parser = new Console_CommandLine();
$parser->addOption('password', array(
    'short_name'  => '-p',
    'long_name'   => '--password',
    'description' => 'password',
    'help_name'   => 'PASSWORD',
    'action'      => 'Password',
));
try {
    $result = $parser->parse();

    print_r($result->options);
    print_r($result->args);
} catch (Exception $e) {
    $parser->displayError($e->getMessage());
}
?> 
