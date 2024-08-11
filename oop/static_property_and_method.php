<?php
class MathCalculator{

    public $sum;
    public $subtraction;
    public $multiplication;
    public $division;
    public static $fibonacci;
    public static $factorial;
    public function sum(){
        $this->sum = 'sum';
        echo "This is sum method.\n";
    }

    public function subtraction(){
        $this->subtraction = 'subtraction';
        echo "This is subtraction method.\n";
    }

    public function multiplication(){
        $this->multiplication = 'multiplication';
        echo "This is multiplication method.\n";
    }

    public function division(){
        $this->division = 'division';
        echo "This is division method.\n";
    }

    public static function fibonacci(){
        self::$fibonacci = 'fibonacci';
        echo "This is fibonacci method.\n";
    }

    public static function factorial(){
        self::$factorial = 'factorial';
        echo "This is factorial method.\n";
    }

    public function normalMix(){
        $this->multiplication = 'multiplication';
        self::$factorial = 'factorial';
        $this->sum();
        self::factorial();
    }

    public static function staticMix()
    {
        self::$fibonacci = 'fibonacci';
        self::fibonacci();
    }
}
$obj = new MathCalculator();
$obj->normalMix();
$obj->fibonacci();
echo "sum value is $obj->sum.";
echo "factorial value is ".MathCalculator::$factorial;
echo PHP_EOL;
MathCalculator::staticMix();
echo "fibonacci value is ".MathCalculator::$fibonacci;