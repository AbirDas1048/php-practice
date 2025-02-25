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
        echo "$key is set\n";
    }

    public function __isset($key){
        echo "Checking the $key is set or not\n";
        return isset($this->data[$key]);
    }

    public function __get($key){
        echo "Getting the value of $key\n";
        return $this->data[$key];
    }

    public function __unset($key){
        echo "Unset the value of $key\n";
        unset($this->data[$key]);
    }
}