<?php
class Singleton{
    private static $instance;
    private $name;
    private function __construct($name){
        $this->name = $name;
    }
    public static function getInstance($name = null): Singleton
    {
        if(!self::$instance){
            echo "Creating New Instance\n";
            self::$instance = new Singleton($name ?? '');
        }else{
            echo "Returning Old Instance\n";
        }
        return self::$instance;
    }

    public function sayName(): void
    {
        echo $this->name."\n";
    }
}

$obj1 = Singleton::getInstance('Karim');
$obj2 = Singleton::getInstance('Rahim');
var_dump($obj1 === $obj2);
echo PHP_EOL;
$obj1->sayName();
$obj2->sayName();
