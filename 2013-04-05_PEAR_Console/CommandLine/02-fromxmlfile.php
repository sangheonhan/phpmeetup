<?php

require_once 'Console/CommandLine.php';

$parser = Console_CommandLine::fromXmlFile('02-fromxmlfile.xml');
try {
    $result = $parser->parse();

    print_r($result->options);
    print_r($result->args);
} catch (Exception $e) {
    $parser->displayError($e->getMessage());
}
?> 
