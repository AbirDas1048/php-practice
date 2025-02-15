<?php
trait Hello{
    public function sayHello(): void
    {
        echo "Hello";
    }
}

trait World{
    public function sayWorld(): void
    {
        echo "World";
    }
}

trait HelloWorld
{
    use Hello, World;
}

class MyWorld
{
    use HelloWorld;
}

$worldObject = new MyWorld();

$worldObject->sayHello() . " " . $worldObject->sayWorld();