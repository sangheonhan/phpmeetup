<?php
class Sync extends Thread
{
    private $count;

    public function __construct()
    {
        $this->count = 0;
    }

    public function run()
    {
        echo "Thread started.\n";
        for ($i = 0; $i < 10; $i++) {
            $this->synchronized(function ($this) {
                echo $this->count++."\n";
                $this->wait();
            }, $this);
        }
        echo "Thread stopped.\n";
    }
}

$t = new Sync();

$t->start();

for ($i = 0; $i < 10; $i++) {
    sleep(1);
    $t->synchronized(function ($t) {
        $t->notify();
    }, $t);
}

$t->join();

?>
