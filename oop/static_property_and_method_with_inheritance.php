<?php
class A{
    static $a;
    public static $b;
    protected static $c;
    private static $d;

    static function functionA()
    {
        echo "Function A from Parent\n";
    }

    public static function functionB()
    {
        echo "Function B from Parent\n";
    }

    protected static function functionC()
    {
        echo "Function C from Parent\n";
    }

    private static function functionD()
    {
        echo "Function D from Parent\n";
    }
}

class B extends A{
    public function normalFunction(){
        echo "Normal Function from Child\n";
        parent::$a = 'a';
        parent::$b = 'b';
        parent::functionA();
        $this->functionB();
    }

    public static function functionA()
    {
        echo "Function A from Child\n";
        parent::$c = 'c';
        parent::functionA();
    }

    public static function functionB()
    {
        echo "Function B from Child\n";
        parent::$c = 'c';
        parent::functionB();
        parent::functionC();
    }

}

$obj = new B();
$obj->normalFunction();
echo PHP_EOL;
echo PHP_EOL;
echo B::$a;
echo PHP_EOL;
echo PHP_EOL;
$obj->functionA();
echo PHP_EOL;
echo PHP_EOL;
B::functionB();