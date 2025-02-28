<?php

/***
 * PHP’s __sleep magic method should return an array holding all the object’s properties that should be included in the serialized version of that object.
 * Properties that are not included in that array will have a default null value in the re-created class instance.
 * PHP will call __sleep method before starting serializing the object to know which properties should be included in the string representation.
 */
class InformationWithoutSleep{
    public $name = "Abir Das";
    public $email = "abir***....@mail.com";
    public $mobile = "01*****1";
    public $address = "Chattogram, Bangladesh";
}

class InformationWithSleep{
    public $name = "Abir Das";
    public $email = "abir***....@mail.com";
    public $mobile = "01*****1";
    public $address = "Chattogram, Bangladesh";
    public function __sleep(){
        return ["name", "email"];
    }
}
echo PHP_EOL;
$information_without_sleep = new InformationWithoutSleep();
$information_without_sleep_string = serialize($information_without_sleep);
echo "Serialize Information without sleep $information_without_sleep_string\n";
echo PHP_EOL;
$information_with_sleep = new InformationWithSleep();
$information_with_sleep_string = serialize($information_with_sleep);
echo "Serialize Information with sleep $information_with_sleep_string\n";
