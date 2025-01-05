<?php

/**
 * We manually include file if we use any method of a class.
 * Using spl_autoload_register it includes all necessary file.
 * If our file name is lowercase, then we need to use strtolower() function.
 */
// include 'Car.php';
spl_autoload_register(function ($class_name){
    include "$class_name.php";
});

(new Car())->getName();
echo PHP_EOL;
(new Bike())->getName();