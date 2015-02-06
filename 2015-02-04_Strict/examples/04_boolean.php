<?php
function exclusiveor(boolean $p, bool$q)
{
    return (($p || $q) && (!($p && $q)));
}

var_dump(exclusiveor(false, false));
var_dump(exclusiveor(true, false));
var_dump(exclusiveor(false, true));
var_dump(exclusiveor(true, true));

var_dump(exclusiveor(1, 0));
