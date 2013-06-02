<?php

$obj1 = new StdClass;
$obj1->name = 'Thrall';
$obj2 = new StdClass;
$obj2->name = 'Sylvanas';
$obj3 = new StdClass;
$obj3->name = 'Cairne';
$obj4 = new StdClass;
$obj4->name = 'Voljin';

$sos = new SplObjectStorage();

$sos->attach($obj1, 'Orc');
$sos->attach($obj2, 'Undead');
$sos->attach($obj3, 'Tauren');
$sos->attach($obj4, 'Troll');

$obj5 = new StdClass;
$obj5->name = 'Voljin';

foreach ($sos as $obj) {
    echo $obj->name, " - ", $sos->getHash($obj), "\n";
}

var_dump($sos->contains($obj4));
var_dump($sos->contains($obj5));

?>
