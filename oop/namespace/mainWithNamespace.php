<?php
namespace Vehicle;
include "Bike.php";
include "Car.php";
$b = new Bike();
$b->name();
echo PHP_EOL;
$c = new Car();
$c->name();