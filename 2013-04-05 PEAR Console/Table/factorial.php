<?php
function factorial($n) {
    assert($n >= 0);

    if ($n == 0) {
        return 1;
    }

    return $n * factorial($n - 1);
}
?>
