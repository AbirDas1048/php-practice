<?php

/***
 * PHP’s __wakeup magic method should reestablish or re-initialize object’s properties and method that should not be included in the serialized version of that object.
 */
class Information{
    public $name = "Abir Das";
    public $email;
    public $mobile;
    public $address = "Chattogram, Bangladesh";

    public $status;

    public function __construct()
    {
        $this->status = 'Active';
        $this->mobile = "01*****1";
        $this->email = "abir***....@mail.com";
    }

    public function __sleep(){
        return ['name','email'];
    }

    public function __wakeup(){
        $this->status = 'Active';
    }
}

echo PHP_EOL;
$information = new Information();
echo "Information before serialized". PHP_EOL;
echo "Name $information->name". PHP_EOL;
echo "Email $information->email". PHP_EOL;
echo "Mobile $information->mobile". PHP_EOL;
echo "Address $information->address". PHP_EOL;
echo "Status $information->status". PHP_EOL;
echo PHP_EOL;
$information_after_serialized = serialize($information);
echo "Information after serialized $information_after_serialized". PHP_EOL;
echo PHP_EOL;
$information_after_deserialized = unserialize($information_after_serialized);
echo "Information after serialized". PHP_EOL;
echo "Name $information_after_deserialized->name". PHP_EOL;
echo "Email $information_after_deserialized->email". PHP_EOL;
echo "Mobile $information_after_deserialized->mobile". PHP_EOL; // This is the difference
echo "Address $information_after_deserialized->address". PHP_EOL;
echo "Status $information_after_deserialized->status". PHP_EOL;
