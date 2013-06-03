<?php

$obj1 = new StdClass;
$obj1->name = 'Thrall';
$obj2 = new StdClass;
$obj2->name = 'Sylvanas';
$obj3 = new StdClass;
$obj3->name = 'Cairne';
$obj4 = new StdClass;
$obj4->name = 'Voljin';

// 동부왕국에는 실바나스
$eastern_kingdom = new SplObjectStorage();
$eastern_kingdom->attach($obj2, 'Undead');

// 칼림도어에는 쓰랄, 케른, 볼진
$kalimdor = new SplObjectStorage();
$kalimdor->attach($obj1, 'Orc');
$kalimdor->attach($obj3, 'Tauren');
$kalimdor->attach($obj4, 'Troll');

$chieftain = new SplObjectStorage();

// 칼림도어와 동부 왕국의 모든 족장을 넣자
$chieftain->addAll($kalimdor);
$chieftain->addAll($eastern_kingdom);

foreach ($chieftain as $obj) {
    echo $obj->name, "\n";
}

echo "--\n";

// 칼림도어의 족장을 뺀 나머지는 제거
$chieftain->removeAllExcept($kalimdor);

foreach ($chieftain as $obj) {
    echo $obj->name, "\n";
}

echo "--\n";

// 칼림도어의 족장들을 제거
$chieftain->removeAll($kalimdor);

echo "Count = ", $chieftain->count(), "\n";

?>
