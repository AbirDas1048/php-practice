<?php
interface Shape
{
    public function draw();
}

class Rectangle implements Shape{
    public function draw(): string
    {
        return "Rectangle";
    }
}

class Circle implements Shape{
    public function draw(): string
    {
        return "Circle";
    }
}

class Square implements Shape{
    public function draw(): string
    {
        return "Square";
    }
}

class Triangle implements Shape{
    public function draw(): string
    {
        return "Triangle";
    }
}

abstract class ShapeDecorator implements Shape{
    protected Shape $shape;

    public function __construct(Shape $shape){
        $this->shape = $shape;
    }


}

class ColorDecorator extends ShapeDecorator{
    private string $color;

    public function __construct(Shape $shape, $color){
        parent::__construct($shape);
        $this->color = $color;
    }

    public function draw(): string
    {
        return $this->shape->draw() . " with color {$this->color}\n";
    }
}

class BorderDecorator extends ShapeDecorator{
    private string $border;

    public function __construct(Shape $shape, string $border){
        parent::__construct($shape);
        $this->border = $border;
    }

    public function draw(): string
    {
        return $this->shape->draw() . " with border {$this->border}px\n";
    }
}

echo (new BorderDecorator(new ColorDecorator(new Rectangle(), 'Green'), '2'))->draw();

echo (new ColorDecorator(new BorderDecorator(new Circle(), '5'), 'Red'))->draw();

echo (new ColorDecorator(new Square(), 'Blue'))->draw();

echo (new BorderDecorator(new Triangle(), '3'))->draw();