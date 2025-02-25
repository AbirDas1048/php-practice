<?php

/***
 * PHP’s overloading is to create dynamic entities.
 * Overloading in PHP provides the means to dynamically "create" properties and methods.
 * These dynamic entities are processed via magic methods one can establish in a class for various action types.
 */
class Overloading{
    private $data = [];

    public function __set($key, $value)
    {
        $this->data[$key] = $value;
        echo "$key property is set\n";
    }

    public function __isset($key){
        echo "Checking the $key property is set or not. ";
        return isset($this->data[$key]);
    }

    public function __get($key){
        echo "The value of $key property is ";
        return $this->data[$key];
    }

    public function __unset($key){
        echo "Unset the $key property\n";
        unset($this->data[$key]);
    }
}

$overloading = new Overloading();

$overloading->first_name = 'Abir';
$overloading->last_name = 'Das';
$overloading->dob = '31/101995';
$overloading->designation = 'Software Engineer';

if(isset($overloading->first_name)){
    echo $overloading->first_name . PHP_EOL;
}else{
    echo "Property not set";
}

if(isset($overloading->father_name)){
    echo $overloading->father_name . PHP_EOL;
}else{
    echo "Property not set\n";
}

if(isset($overloading->dob)){
    echo $overloading->dob . PHP_EOL;
}else{
    echo "Property not set\n";
}

unset($overloading->dob);
// echo $overloading->dob; // It will give error. Because dob property is unset.

if(isset($overloading->dob)){
    echo $overloading->dob . PHP_EOL;
}else{
    echo "Property not set\n";
}