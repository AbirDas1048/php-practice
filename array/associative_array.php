<?php

$friends = [
    "school" => "shuvo, pranta, ador, rafi, shuvro, sakib, rana",
    "college" => "mahi, tushar, gias, ansar, arif, sohan, firoz",
    "university" => "joy, pranta, ashu, sanjoy, abhishek, rony, srejon",
];

foreach ($friends as $key => $value) {
    printf("{$key} => {$value}\n");
}

print_r($friends);

print_r(array_keys($friends)); // Print only keys of an array in array format

$keys = array_keys($friends);
for ($i = 0; $i < count($keys); $i++) {
    echo $friends[$keys[$i]] . "\n";
}

print_r(array_values($friends)); // Print only values of an array in array format


/*
    Add something into associative array
*/

$friends['university'] = $friends['university'] . ", asru";
print_r($friends);
// Or
$friends['university'] .= ", shouvik";
print_r($friends);
