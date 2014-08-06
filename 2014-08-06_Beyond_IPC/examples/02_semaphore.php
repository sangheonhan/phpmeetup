<?php

$marks = array('#', '*');

$sema = new SyncSemaphore('foobar');

for ($i = 0; $i < 2; $i++) {
    $mark = array_shift($marks);
    $pid = pcntl_fork();
    if ($pid) {
        continue;
    }

    // child
    $pid = posix_getpid();
    for ($j = 0; $j < 10; $j++) {
        $sema->lock();
        echo "$mark$i";
        usleep(mt_rand(1, 1000));
        echo "$mark\n";
        $sema->unlock();
        usleep(mt_rand(1, 100));
    }
    break;
}

for ($i = 0; $i < 2; $i++) {
    pcntl_waitpid(-1, $status);
}

?>
