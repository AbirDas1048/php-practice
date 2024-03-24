<?php

$friends = array("joy", "pranta", "ashu", "sanjoy", "abhishek");
print_r($friends);

/*
    Change value by an array index.
*/

$friends[0] = "rupok"; // Array is mutable. That's why it can changeable
print_r($friends);

/*
    Insert into last of an array.
*/
$inserting_item = "rony";
array_push($friends, $inserting_item);
print_r($friends);

/*
    Delete the last element from an array.
*/
$deleting_item = array_pop($friends);
echo $deleting_item . "\n";
print_r($friends);

/*
    Insert into first of an array.
*/
$inserting_item = "srejon";
array_unshift($friends, $inserting_item);
print_r($friends);

/*
    Delete the first element from an array.
*/
$deleting_item = array_shift($friends);
echo $deleting_item . "\n";
print_r($friends);
