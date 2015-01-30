<?php

use KzykHys\Parallel\Parallel;

require __DIR__."/vendor/autoload.php";

$parallel = new Parallel();
$parallel->each(
    ['hi', 'foobar'],
    function ($name) {
        echo "task start - $name\n";
        sleep(strlen($name));
        echo "task end - $name\n";
    }
);

echo "Done\n";
?>
