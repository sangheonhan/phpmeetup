<?php
trait MeleeClass
{
    public function hit()
    {
        echo "Hit\n";
    }
}

trait RangeClass
{
    public function shoot()
    {
        echo "Shoot\n";
    }
}

trait MagicClass
{
    public function cast()
    {
        echo "Cast\n";
    }
}

class Paladin
{
    use MeleeClass, MagicClass;
}

class Druid
{
    use MeleeClass, RangeClass, MagicClass;
}

$paladin = new Paladin;
$paladin->hit();
$paladin->cast();

$druid = new Druid;
$druid->hit();
$druid->shoot();
$druid->cast();

?>
