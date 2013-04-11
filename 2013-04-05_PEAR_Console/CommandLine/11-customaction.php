<?php

require_once 'Console/CommandLine.php';
require_once 'Console/CommandLine/Action.php';

class ActionIP extends Console_CommandLine_Action
{
    public function execute($value=false, $params=array())
    {
        if (self::checkip($value) == false) {
            throw new Exception(
                sprintf('Option "%s" must be IP address', $this->option->name)
            );
        }
        $this->setResult($value);
    }

    private static function checkip($ip) {
        if (preg_match('/^(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})$/', $ip, $matches) == false) {
            return false;
        }
        array_shift($matches);
        foreach ($matches as $part) {
            if ($part > 255 || $part < 0) {
                return false;
            }
        }

        return true;
    }
}

Console_CommandLine::registerAction('StoreIP', 'ActionIP');

$parser = new Console_CommandLine();
$parser->addOption('ip', array(
    'short_name'  => '-i',
    'long_name'   => '--ip',
    'description' => 'IP Address',
    'help_name'   => 'IP',
    'action'      => 'StoreIP'
));

try {
    $result = $parser->parse();

    print_r($result->options);
    print_r($result->args);
} catch (Exception $e) {
    $parser->displayError($e->getMessage());
};
?>
