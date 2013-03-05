<?php

require_once 'Log.php';

$logger = Log::singleton('file', 'levels.log', 'factorial', null, PEAR_LOG_ERR);

$logger->log('Step 1 - Emergency',   PEAR_LOG_EMERG);    // System is unusable
$logger->log('Step 1 - Alert',       PEAR_LOG_ALERT);    // Immediate action required
$logger->log('Step 1 - Critical',    PEAR_LOG_CRIT);     // Critical conditions
$logger->log('Step 1 - Error',       PEAR_LOG_ERR);      // Error conditions
$logger->log('Step 1 - Warning',     PEAR_LOG_WARNING);  // Warning conditions
$logger->log('Step 1 - Notice',      PEAR_LOG_NOTICE);   // Normal but significant
$logger->log('Step 1 - Information', PEAR_LOG_INFO);     // Informational
$logger->log('Step 1 - Debug',       PEAR_LOG_DEBUG);    // Debug-level messages

$mask = Log::MASK(PEAR_LOG_WARNING) | Log::MAX(PEAR_LOG_CRIT) | 
    Log::MIN(PEAR_LOG_INFO);
$logger->setMask($mask);

$logger->emerg('Step 2 - Emergency');
$logger->alert('Step 2 - Alert');
$logger->crit('Step 2 - Critical');
$logger->err('Step 2 - Error');
$logger->warning('Step 2 - Warning');
$logger->notice('Step 2 - Notice');
$logger->info('Step 2 - Information');
$logger->debug('Step 2 - Debug');

$mask = PEAR_LOG_ALL ^ Log::MASK(PEAR_LOG_WARNING);
$logger->setMask($mask);

$logger->emerg('Step 3 - Emergency');
$logger->alert('Step 3 - Alert');
$logger->crit('Step 3 - Critical');
$logger->err('Step 3 - Error');
$logger->warning('Step 3 - Warning');
$logger->notice('Step 3 - Notice');
$logger->info('Step 3 - Information');
$logger->debug('Step 3 - Debug');

$mask = $logger->getMask() | Log::MASK(PEAR_LOG_WARNING);
$logger->setMask($mask);

$logger->emerg('Step 4 - Emergency');
$logger->alert('Step 4 - Alert');
$logger->crit('Step 4 - Critical');
$logger->err('Step 4 - Error');
$logger->warning('Step 4 - Warning');
$logger->notice('Step 4 - Notice');
$logger->info('Step 4 - Information');
$logger->debug('Step 4 - Debug');

