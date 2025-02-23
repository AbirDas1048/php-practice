<?php

/***
 * An interface in OOP is a contract that defines a set of methods that a class must implement.
 * It serves as a blueprint for behavior without providing any implementation details.
 * Interfaces support multiple inheritance, allowing a class to implement multiple interfaces.
 * All methods declared in an interface must be implemented by the class that implements the interface.
 * Interfaces cannot have fields or constructors.
 * They focus solely on method signatures and do not allow the inclusion of variables or constructor definitions.
 * Only methods are allowed to an interface.
 * All the methods will work like an abstract method.
 * All methods visibility needs to be public.
 * When we implement an interface, we need to declare all the methods with same no of parameters in the implemented class.
 * An interface can be extended with another interface.
 * In PHP, an interface cannot have a constructor.
 * Because interfaces only define method signatures and do not provide implementations.
 * Since PHP interfaces cannot be instantiated directly, they do not need constructors.
 */

 interface BaseOrganism
 {
     public function eat();
     public function sleep();
     public function run();
 }

 interface BaseAnimal extends BaseOrganism{
     public function canFly();
 }

interface BaseHuman extends BaseOrganism{
    public function canFeel();
}

class ParentOrganism implements BaseOrganism{
    public function eat(){}
    public function sleep(){}
    public function run(){}
    public function canSwim(){}
}

class ParentAnimal implements BaseAnimal{
     public function eat(){}
    public function sleep(){}
    public function run(){}
    public function canFly(){}
}

class ParentHuman implements BaseHuman{
    public function eat(){}
    public function sleep(){}
    public function run(){}
    public function canFeel(){}
}

class ChildOrganism extends ParentOrganism
{
    public function organismName(){}
}

class ChildAnimal extends ParentAnimal
{
    public function animalName(){}
}

class ChildHuman extends ParentHuman
{
    public function humanName(){}
}

abstract class AbstractParentOrganism implements BaseOrganism{}
abstract class AbstractParentAnimal implements BaseAnimal{
     public function abstractAnimalName(){}
}
abstract class AbstractParentHuman implements BaseHuman{
    abstract public function abstractHumanName();
}

class AbstractChildOrganism extends AbstractParentOrganism{
     public function eat()
     {
         // TODO: Implement eat() method.
     }

     public function run()
     {
         // TODO: Implement run() method.
     }

     public function sleep()
     {
         // TODO: Implement sleep() method.
     }
}

class AbstractChildAnimal extends AbstractParentAnimal{
    public function eat()
    {
        // TODO: Implement eat() method.
    }

    public function run()
    {
        // TODO: Implement run() method.
    }

    public function sleep()
    {
        // TODO: Implement sleep() method.
    }

    public function canFly()
    {
        // TODO: Implement canFly() method.
    }
}

class AbstractChildHuman extends AbstractParentHuman {
    public function eat()
    {
        // TODO: Implement eat() method.
    }

    public function run()
    {
        // TODO: Implement run() method.
    }

    public function sleep()
    {
        // TODO: Implement sleep() method.
    }

    public function canFeel()
    {
        // TODO: Implement canFeel() method.
    }

    public function abstractHumanName()
    {
        // TODO: Implement abstractHumanName() method.
    }
}

$h1 = new ChildHuman();

echo $h1 instanceof ChildHuman ? 'yes' : 'no';
echo PHP_EOL;
echo $h1 instanceof ParentHuman ? 'yes' : 'no';
echo PHP_EOL;
echo $h1 instanceof BaseHuman ? 'yes' : 'no';
echo PHP_EOL;

echo $h1 instanceof ChildAnimal ? 'yes' : 'no';
echo PHP_EOL;
echo $h1 instanceof ParentAnimal ? 'yes' : 'no';
echo PHP_EOL;
echo $h1 instanceof BaseAnimal ? 'yes' : 'no';
echo PHP_EOL;

echo $h1 instanceof ChildOrganism ? 'yes' : 'no';
echo PHP_EOL;
echo $h1 instanceof ParentOrganism ? 'yes' : 'no';
echo PHP_EOL;
echo $h1 instanceof BaseOrganism ? 'yes' : 'no';
echo PHP_EOL;

