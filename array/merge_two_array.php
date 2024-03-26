<?php

/*
    Example 1
*/

$friends1 = ["joy", "pranta", "ashu", "sanjoy"];
$friends2 = ["abhishek", "rony", "srejon"];

$all = array_merge($friends1, $friends2);

print_r($all);

/*
    Example 2
*/

$friends = ["joy", "pranta", "ashu", "sanjoy", "abhishek", "rony", "srejon"];

$new_friends1 = array_slice($friends, 0, 3, true); // check $all_friends difference without true
$new_friends2 = array_slice($friends, 3, null, true); // check $all_friends difference without true

$all_friends = $new_friends1 + $new_friends2; // When we want to merge array with plus(+) we have to carefull about their index.

print_r($all_friends);

/*
    Example 3
*/

$friends = ["joy", "pranta", "ashu", "sanjoy", "abhishek", "rony", "srejon"];

$new_friends1 = array_slice($friends, 0, 3);
$new_friends2 = array_slice($friends, 3);

$all_friends = array_merge($new_friends1, $new_friends2);

print_r($all_friends);

/*
    For associative array
*/

$friends = [
    "joy" => 1014,
    "pranta" => 1018,
    "ashu" => 1024,
    "sanjoy" => 1022,
    "abhishek" => 1046,
    "rony" => 1062,
    "srejon" => 1061,
];

$new_friends = [
    "rosy" => 1013,
    "riya" => 1010,
    "hima" => 1015,
    "anuradha" => 1052,
];

$all_friends = array_merge($friends, $new_friends);
print_r($all_friends);
