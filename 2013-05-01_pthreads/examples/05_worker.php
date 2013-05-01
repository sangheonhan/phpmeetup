<?php

class Site extends Stackable
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
        $this->worker->fetch($this->prefix, $this->url);
    }
}

class Fetcher extends Worker 
{
    public function run()
    {
    }

    public function fetch($prefix, $url)
    {
        $file = new SplFileObject($url);
        while (!$file->eof()) {
            $file->fgets();
            echo $prefix;
        }
    }
}

$worker1 = new Fetcher();
$worker2 = new Fetcher();

$worker1->start();
$worker2->start();

$worker1->stack(new Site('N', 'http://naver.com/'));
$worker2->stack(new Site('D', 'http://daum.net/'));
$worker1->stack(new Site('C', 'http://www.clien.net/'));
$worker2->stack(new Site('S', 'http://www.slrclub.com/'));

$worker1->shutdown();
$worker2->shutdown();

?>
