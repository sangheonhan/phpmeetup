<?php

$obj1 = new StdClass;
$obj1->name = 'Thrall';
$obj2 = new StdClass;
$obj2->name = 'Sylvanas';
$obj3 = new StdClass;
$obj3->name = 'Cairne';
$obj4 = new StdClass;
$obj4->name = 'Voljin';

$eastern_kingdom = new SplObjectStorage();
$eastern_kingdom->attach($obj2, 'Undead');

$kalimdor = new SplObjectStorage();
$kalimdor->attach($obj1, 'Orc');
$kalimdor->attach($obj3, 'Tauren');
$kalimdor->attach($obj4, 'Troll');

$chieftain = new SplObjectStorage();

$chieftain->addAll($kalimdor);
$chieftain->addAll($eastern_kingdom);

foreach ($chieftain as $obj) {
    echo $obj->name, "\n";
}

echo "--\n";

$chieftain->removeAllExcept($kalimdor);

foreach ($chieftain as $obj) {
    echo $obj->name, "\n";
}

echo "--\n";

$chieftain->removeAll($kalimdor);

echo "Count =", $chieftain->count(), "\n";

?>
