<?php
trait Hot
{
    public function temperature()
    {
        return 'Hot';
    }
}

trait Cold
{
    public function temperature()
    {
        return 'Cold';
    }
}

trait Water
{
    public function ingredient()
    {
        return 'Water';
    }
}

trait Milk
{
    public function ingredient()
    {
        return 'Milk';
    }
}

trait SoyMilk
{
    public function ingredient()
    {
        return 'SoyMilk';
    }
}

trait Cinnamon
{
    public function topping()
    {
        return 'Cinnamon';
    }
}

trait Chocolate
{
    public function topping()
    {
        return 'Chocolate';
    }
}

trait NoTopping
{
    public function topping()
    {
        return false;
    }
}

class Coffee
{
    public function recipe()
    {
        $recipe = "Esspresso, {$this->temperature()} {$this->ingredient()}";
        if ($this->topping()) {
            $recipe .= ", {$this->topping()}";
        }

        return $recipe;
    }
}

class Americano extends Coffee
{
    use Hot, Water, NoTopping;
}

class IceCafeLatte extends Coffee
{
    use Cold, Milk, NoTopping;
}

class Cappuccino extends Coffee
{
    use Hot, Milk, Cinnamon;
}

class IceCafeMocca extends Coffee
{
    use Cold, Milk, Chocolate;
}

$americano = new Americano;
echo "Americano = {$americano->recipe()}\n";

$icecafelatee = new IceCafeLatte;
echo "Ice Cafe Latte = {$icecafelatee->recipe()}\n";

$cappuccino =  new Cappuccino;
echo "Cappuccino = {$cappuccino->recipe()}\n";

$icecafemocca = new IceCafeMocca;
echo "Ice Cafe Mocca = {$icecafemocca->recipe()}\n";

?>
