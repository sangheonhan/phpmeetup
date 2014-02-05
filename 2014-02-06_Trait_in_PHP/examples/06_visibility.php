<?php
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

trait HealerClass
{
    public function cast()
    {
        echo "Heal\n";
    }
}

trait RangeHybridClass
{
    use RangeClass, MagicClass;
}

class Priest
{
    use RangeHybridClass, HealerClass {
        RangeHybridClass::cast insteadof HealerClass;
        HealerClass::cast as heal;
        RangeHybridClass::shoot as private;
    }
}

$priest = new Priest;
// $priest->shoot();
$priest->cast();
$priest->heal();
?>
