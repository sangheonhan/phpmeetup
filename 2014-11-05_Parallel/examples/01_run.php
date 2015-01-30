<?php

use KzykHys\Parallel\Parallel;

require __DIR__."/vendor/autoload.php";

$parallel = new Parallel();
$parallel->run(
    [
        function () {
            for ($i = 0; $i < 5; $i++) {
                echo "task#1 start\n";
                sleep(2);
                echo "task#1 end\n";
            }
        },
        function () {
            for ($i = 0; $i < 5; $i++) {
                echo "\ttask#2 start\n";
                sleep(3);
                echo "\ttask#2 end\n";
            }
        }
    ]
);

echo "Done\n";
?>
