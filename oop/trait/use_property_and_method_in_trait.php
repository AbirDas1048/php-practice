<?php
trait Calories
{
    public $banana = 105;
    public $cake = 300;
    public $donation = 205;
    static public $fund = 100;

    static public function test(): int
    {
        return self::$fund;
    }

    abstract public function greet($name);
}

class Cookbook {
    use Calories;

    // public $cake = 500; // This will give fatal error
    public $donation = 205; // value must be same

    public function greet($name): string
    {
        return "Hi I'm $name";
    }
}

$c = new Cookbook();
echo $c->banana . PHP_EOL;
echo $c->donation . PHP_EOL;
echo Cookbook::$fund . PHP_EOL;
echo Cookbook::test() . PHP_EOL;
echo $c->greet('Abir') . PHP_EOL;
