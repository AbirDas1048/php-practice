<?php
$person = [
    'name' => 'XYZ',
    'id' => '6625535524',
    'age' => '16',
    'sex' => 'M',
];

function processMaternityLeave($person)
{
    if($person['age'] < 18){
        throw new Exception("Too young\n");
    } else if ($person['sex'] == 'F') {
        echo "Processed";
    } else {
        throw new GenderMismatchException($person);
    }
}

class GenderMismatchException extends Exception
{

    private $person;
    public function __construct($person)
    {
        $this->person = $person;
        parent::__construct("Gender Mismatch \n");
    }
    public function getDetailedMessage()
    {
        echo "Gender Mismatch for Person with ID {$this->person['id']} \n";
    }
}

try{
    processMaternityLeave($person);
} catch(GenderMismatchException $e) {
    echo $e->getMessage();
    $e->getDetailedMessage();
} catch (Exception $e){
    echo $e->getMessage();
}