<?php

require_once 'Console/CommandLine.php';
$parser = new Console_CommandLine(array('name' => 'pear'));

$list_cmd = $parser->addCommand('list', array(
   'description' => 'List Installed Packages In The Default Channel',
));
$list_cmd->addOption('list_all', array(
    'short_name'  => '-a',
    'long_name'   => '--allchannels',
    'description' => 'list installed packages from all channels',
    'action'      => 'StoreTrue'
));
$list_cmd->addOption('list_channelinfo', array(
    'short_name'  => '-i',
    'long_name'   => '--channelinfo',
    'description' => 'output fully channel-aware data, even on failure',
    'action'      => 'StoreTrue'
));

$search_cmd = $parser->addCommand('search', array(
   'description'  => 'Search remote package database',
));
$search_cmd->addOption('list_channelinfo', array(
    'short_name'  => '-i',
    'long_name'   => '--channelinfo',
    'description' => 'output fully channel-aware data, even on failure',
    'action'      => 'StoreTrue'
));
$search_cmd->addArgument('packages', array(
    'description' => 'package name', 
    'multiple'    => true,
    'help_name'   => 'PACKAGE'
));

try {
    $result = $parser->parse();

    switch ($result->command_name) {
        case 'list' :
            print_r($result->command->options);
            print_r($result->command->args);
            break;
        case 'search' :
            print_r($result->command->options);
            print_r($result->command->args);
            break;
        default :
            break;
    }
} catch (Exception $e) {
    $parser->displayError($e->getMessage());
}
?> 
