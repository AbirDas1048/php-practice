<?php
class Human{

    public $name;
    private $dob;

    function sayHi(): void{
        echo "Hi, take my greetings.\n";
    }

    function getName(): void{
        echo "My name is $this->name \n";
    }

    function showProfession($profession): void{
        echo "I am a $profession \n";
    }

    function showFavouriteDish($dish): void{
        echo "My favourite dish is $dish \n";
    }

    function setDateOfBirth($date): void{
        $this->dob = $date;
        $this->showDateOfBirth();
    }

    function showDateOfBirth():void{
         echo "My date of birth is $this->dob\n";
    }
}

$person1 = new Human();
$person1->name = "Abir Das";

$person2 = new Human();
$person2->name = "Nibir Das";

$person1->sayHi();
$person1->getName();
$person1->showProfession('Developer');

$person2->sayHi();
$person2->getName();
$person2->showFavouriteDish('Ice Cream');

$person1->setDateOfBirth('31-10-1995');