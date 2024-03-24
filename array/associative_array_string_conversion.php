<?php

$info = [
    "first_name" => "Abir",
    "last_name" => "Das",
    "email" => "abir...@gmail.com",
    "desgnation" => "Software Engineer",
    "education" => "B.Sc",
    "university" => "Premier University",
];

// Associative array to string

$serialize = serialize($info);
echo $serialize . "\n";

$json = json_encode($info);
echo $json . "\n";

// String to associative array
$unserialize = unserialize($serialize);
print_r($unserialize);

$array = json_decode($json, true); // Here the second parameter is for to return associative array. Without this it will return object.
print_r($array);
