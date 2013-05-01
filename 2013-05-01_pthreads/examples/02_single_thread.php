<?php

class Fetcher extends Thread
{
    private $prefix;
    private $url;

    public function __construct($prefix, $url)
    {
        $this->prefix = $prefix;
        $this->url = $url;
    }

    public function run()
    {
        $file = new SplFileObject($this->url);
        while (!$file->eof()) {
            $file->fgets();
            echo $this->prefix;
        }
    }
}
$urls = array(
    'N' => 'http://naver.com/',
    'D' => 'http://daum.net/',
    'C' => 'http://www.clien.net/',
    'S' => 'http://www.slrclub.com/',
);

foreach ($urls as $key => $url)
{
    $t = new Fetcher($key, $url);
    $threads[] = $t;

    $t->start();
    $t->join();
}

?>
