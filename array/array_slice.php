<?php

/*
    array_slice is used for extract data from an array.
*/

$friends = ["joy", "pranta", "ashu", "sanjoy", "abhishek", "rony", "srejon"];

$new_friends1 = array_slice($friends, 2); // Here $friends is the input array from where we want to extract data. 2 is the offset/index of input array from which index we want to extract data.

$new_friends2 = array_slice($friends, 2, 3); // Here 3 is length. How many data we want to extract.

$new_friends3 = array_slice($friends, 2, 3, true); // Here true is used for preserve_keys. If you want to keep original index of input array.

$new_friends4 = array_slice($friends, -5); // Here negative index (-5) is used for count the index from the last.

$new_friends5 = array_slice($friends, -5, 3);

$new_friends6 = array_slice($friends, -5, -1); // Here negative length (-1) is used for count the length from the last of the input array.

$new_friends7 = array_slice($friends, -5, -1, true);

print_r($new_friends7);
