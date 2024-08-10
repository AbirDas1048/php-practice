<?php
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

