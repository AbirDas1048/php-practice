<?php
class Shape{

    protected $name;
    protected $area;

    public function __construct($name){
        $this->name = $name;
        $this->calculateArea();
    }

    public function getArea(): void
    {
        echo "This $this->name area is $this->area.\n";
    }

    public function calculateArea(){}
}

class Triangle extends Shape{

    private $a, $b, $c;

    public function __construct($a, $b, $c, $name = ''){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct($name != '' ? $name : 'Triangle');
    }

    public function calculateArea(): void{
        $perimeter = ($this->a * $this->b * $this->c)/2;
        $area = sqrt($perimeter * ($perimeter - $this->a) * ($perimeter - $this->b) * ($perimeter - $this->c));
        $this->area = $area;
    }
}

class Rectangle extends Shape{

    private $a, $b;

    public function __construct($a, $b, $name = ''){
        $this->a = $a;
        $this->b = $b;
        parent::__construct($name != '' ? $name : 'Rectangle');
    }

    public function calculateArea(): void{
        $this->area = $this->a * $this->b;
    }
}

$triangle1 = new Triangle(2, 3, 4, 'Triangle1');
$triangle1->getArea();

echo PHP_EOL;

$triangle2 = new Triangle(3, 3, 3);
$triangle2->getArea();

echo PHP_EOL;

$rectangle1 = new Rectangle(2, 3, 'Rectangle1');
$rectangle1->getArea();

echo PHP_EOL;

$rectangle2 = new Rectangle(3, 4);
$rectangle2->getArea();

echo PHP_EOL;