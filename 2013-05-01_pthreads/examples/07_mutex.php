<?php

class MyThread extends Thread
{
    private $mutex;

    public function __construct($mutex)
    {
        $this->mutex = $mutex;
    }

    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            Mutex::lock($this->mutex);
            echo "<".$this->getThreadId().":$i";
            usleep(rand(100000, 200000));
            echo ">\n";
            Mutex::unlock($this->mutex);
            usleep(rand(100000, 200000));
        }
    }
}

class OtherThread extends MyThread
{
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            if (Mutex::trylock($this->mutex)) {
                echo "[".$this->getThreadId().":$i";
                usleep(rand(100000, 200000));
                echo "]\n";
                Mutex::unlock($this->mutex);
            }
            usleep(rand(100000, 200000));
        }
    }
}

$mutex = Mutex::create();

$t1 = new MyThread($mutex);
$t2 = new MyThread($mutex);
$t3 = new OtherThread($mutex);

$t1->start();
$t2->start();
$t3->start();

$t1->join();
$t2->join();
$t3->join();

Mutex::destroy($mutex);

?>
