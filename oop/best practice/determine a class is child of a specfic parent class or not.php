<?php
class Shape{}
class Person{}
class Animal{}

class Objects
{
    private $shapes;
    private $person;
    private $animal;
    public function __construct(){
        $this->shapes = [];
        $this->person = [];
        $this->animal = [];
    }

    public function addShape(Shape $shape): void{
        $this->shapes[] = $shape;
    }
    public function addPerson(Person $person): void{
        $this->person[] = $person;
    }

    public function addAnimal(Animal $animal): void{
        $this->animal[] = $animal;
    }

    public function totalShapes(): int{
        return count($this->shapes);
    }

    public function totalPerson(): int{
        return count($this->person);
    }

    public function totalAnimal(): int{
        return count($this->animal);
    }
}

class Square extends Shape{}

class Circle extends Shape{}

class Teacher extends Person{}

class Student extends Person{}

class Cat extends Animal{}

class Dog extends Animal{}

$objectCollection = new Objects();
$objectCollection->addShape(new Square());
$objectCollection->addShape(new Circle());

$objectCollection->addAnimal(new Cat());
$objectCollection->addAnimal(new Dog());

/*
$objectCollection->addAnimal(new Student()); // This will five fatal error
*/

$objectCollection->addPerson(new Student());
$objectCollection->addPerson(new Teacher());

echo "Total Shapes {$objectCollection->totalShapes()}.\n";

echo "Total Persons {$objectCollection->totalPerson()}.\n";

echo "Total Animals {$objectCollection->totalAnimal()}.\n";