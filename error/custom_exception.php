<?php
$person = [
    'name' => 'XYZ',
    'id' => '6625535524',
    'age' => '24',
    'sex' => 'M',
];

function processMaternityLeave($person)
{
    if ($person['sex'] == 'F') {
        echo "Processed";
    } else {
        throw new Exception("Gender Mismatch");
    }
}


processMaternityLeave($person);
