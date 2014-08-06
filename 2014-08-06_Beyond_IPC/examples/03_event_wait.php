<?php

$revolver = array_pad(array(), 6, false);
$revolver[mt_rand(0, 5)] = true;

$evt = new SyncEvent('foobar');

foreach ($revolver as $bullet) {
    $evt->wait();
    if ($bullet) {
        echo "Bang!!\n";
        break;
    }

    echo "Whew!\n";
}

?>
