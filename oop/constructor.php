<?php
class Person{

    public $name;
    private $dob;

    function __construct($first_name, $last_name, $dob)
    {
        $this->name = $first_name . " " . $last_name;
        $this->dob = $dob;

    }

    function sayHi(): void{
        echo "Hi, take my greetings.\n";
        $this->getName();
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

    function showDateOfBirth():void{
        echo "My date of birth is $this->dob\n";
    }

    function info(): void{
        $this->getName();
        $this->showDateOfBirth();
    }
}

$p1 = new Person('Abir', 'Das', '31-10-1995');
$p2 = new Person('Nibir', 'Das', '28-05-1998');

$p1->sayHi();
$p1->showDateOfBirth();
$p1->showProfession('Developer');

$p2->info();