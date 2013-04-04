 <?php
require_once 'Console/CommandLine.php';
$parser = new Console_CommandLine();

$parser->addArgument('input', array(
    'description' => 'input file', 
    'help_name' => 'INPUT', 
    'multiple' => true, 
    'optional' => true
));
$parser->addArgument('output', array(
    'description' => 'output file', 
    'help_name' => 'OUTPUT'
));

try {
   $result = $parser->parse();
   print_r($result->args);
} catch (Exception $e) {
   $parser->displayError($e->getMessage());
}
?> 
