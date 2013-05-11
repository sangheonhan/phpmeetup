<?php
$urls = array(
    'N' => 'http://naver.com/',
    'D' => 'http://daum.net/',
    'C' => 'http://www.clien.net/',
    'S' => 'http://www.slrclub.com/',
);

foreach ($urls as $prefix => $url) {
    $file = new SplFileObject($url);
    while (!$file->eof()) {
        $file->fgets();
        echo $prefix;
    }
}
?>
