<?php

include "Bike.php";
include "Car.php";
$b = new \Vehicle\Bike(); // This is Qualified Name
$b->name();
echo PHP_EOL;
$c = new Vehicle\Car(); // This is Unqualified Name
$c->name();