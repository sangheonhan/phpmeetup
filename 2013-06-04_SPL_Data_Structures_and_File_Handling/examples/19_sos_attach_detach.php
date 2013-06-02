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

foreach ($sos as $obj) {
    echo $obj->name, " - ", $sos->getInfo(), "\n";
}

echo "--\n";

$sos->detach($obj3);
foreach ($sos as $obj) {
    if ($obj == $obj2) {
        $sos->setInfo('Blood Elf');
    }
}

foreach ($sos as $obj) {
    echo $obj->name, " - ", $sos->getInfo(), "\n";
}

?>
