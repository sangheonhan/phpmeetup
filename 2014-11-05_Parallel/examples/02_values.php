<?php

use KzykHys\Parallel\Parallel;

require __DIR__."/vendor/autoload.php";

$parallel = new Parallel();
$values = $parallel->values(
    [
        function () {
            echo "task#1 start\n";
            sleep(2);
            echo "task#1 end\n";
            return 'item';
        },
        'foo' => function () {
            echo "\ttask#2 start\n";
            sleep(3);
            echo "\ttask#2 end\n";
            return new \DateTime();
        }
    ]
);

var_dump($values);
