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

trait MeleeHybridClass
{
    use MeleeClass, MagicClass;
}

trait RangeHybridClass
{
    use RangeClass, MagicClass;
}

class Paladin
{
    use MeleeHybridClass;
}

class Priest
{
    use RangeHybridClass;
}

$paladin = new Paladin;
$paladin->hit();
$paladin->cast();

$priest = new Priest;
$priest->shoot();
$priest->cast();

?>
