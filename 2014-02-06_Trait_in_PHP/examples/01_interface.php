<?php
interface MeleeClass
{
    public function hit();
}

interface RangeClass
{
    public function shoot();
}

interface MagicClass
{
    public function cast();
}

class Paladin implements MeleeClass, MagicClass
{
    public function hit()
    {
        echo "Hit\n";
    }

    public function cast()
    {
        echo "Cast\n";
    }
}

class Druid implements MeleeClass, RangeClass, MagicClass
{
    public function hit()
    {
        echo "Hit\n";
    }

    public function shoot()
    {
        echo "Shoot\n";
    }

    public function cast()
    {
        echo "Cast\n";
    }
}

$paladin = new Paladin;
$paladin->hit();
$paladin->cast();

$druid = new Druid;
$druid->hit();
$druid->shoot();
$druid->cast();
?>
