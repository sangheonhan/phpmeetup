<?php
class MyThread extends Thread
{
    private $cond;
    private $mutex;

    public function __construct($cond, $mutex)
    {
        $this->cond = $cond;
        $this->mutex = $mutex;
    }

    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            Mutex::lock($this->mutex);
            Cond::wait($this->cond, $this->mutex);
            echo "<".$this->getThreadId().":$i";
            usleep(rand(10000, 20000));
            echo ">\n";
            usleep(rand(10000, 20000));
            Mutex::unlock($this->mutex);
        }
    }
}

$mutex = Mutex::create();
$cond = Cond::create();

$t1 = new MyThread($cond, $mutex);
$t2 = new MyThread($cond, $mutex);

$t1->start();
$t2->start();

for ($i = 0; $i < 5; $i++) {
    Cond::signal($cond);
    usleep(200000);
}

for ($i = 0; $i < 10; $i++) {
    Cond::broadcast($cond);
    usleep(200000);
}

$t1->join();
$t2->join();

Cond::destroy($cond);
Mutex::destroy($mutex);

?>
