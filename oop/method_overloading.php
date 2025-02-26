<?php
/***
 * Method overloading for creating dynamic methods that are not declared within the class scope.
 * PHP method overloading also triggers magic methods dedicated to the appropriate purpose.
 */

class MethodOverloading {
    public function __call($name, $arguments) {

        echo "Calling object method '$name' "
            . implode(', ', $arguments). "\n";
    }


    public static function __callStatic($name, $arguments) {

        echo "Calling static method '$name' "
            . implode(', ', $arguments). "\n";
    }
}


$obj = new MethodOverloading();

$obj->greet('Hi', 'My name is Abir');

MethodOverloading::greet('Greetings', 'My name is Abir Das', 'I am a Software Engineer');
