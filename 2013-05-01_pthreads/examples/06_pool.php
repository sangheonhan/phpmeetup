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

class Pool
{
    private $workers;

    public function __construct($size = 2)
    {
        for ($i = 0; $i < $size; $i++) {
            $this->workers[$i] = new Fetcher();
            $this->workers[$i]->start();
        }
    }

    public function submit(Stackable $work)
    {
        $index = -1;
        $stacked = PHP_INT_MAX;
        foreach ($this->workers as $key => $worker) {
            if ($worker->isShutdown() == false && $worker->getStacked() < $stacked) {
                $stacked = $worker->getStacked();
                $index = $key;
            }
        }

        if ($index >= 0 && $this->workers[$index]->isShutdown() == false) {
            $this->workers[$index]->stack($work);
        }
    }

    public function shutdown()
    {
        foreach ($this->workers as $worker) {
            $worker->shutdown();
        }
    }
}

$urls = array(
    'N' => 'http://naver.com/',
    'D' => 'http://daum.net/',
    'C' => 'http://www.clien.net/',
    'S' => 'http://www.slrclub.com/',
);

$pool = new Pool(2);

foreach ($urls as $prefix => $url) {
    $pool->submit(new Site($prefix, $url));
}

$pool->shutdown();
?>
