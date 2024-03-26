<?php

/*
    array_splice is used for remove data from an array.
*/

$friends = ["joy", "pranta", "ashu", "sanjoy", "abhishek", "rony", "srejon"];

/*
    Note: It always remove the data from the original array. So, to test an operation uncomment it first.
*/

// $removed_friends = array_splice($friends, 2);
// print_r($removed_friends);

// $removed_friends_with_length = array_splice($friends, 2, 2);
// print_r($removed_friends_with_length);

// $removed_friends_negative_index = array_splice($friends, -2);
// print_r($removed_friends_negative_index);

// $removed_friends_with_negative_index_and_positive_length = array_splice($friends, -5, 3);
// print_r($removed_friends_with_negative_index_and_positive_length);

// $removed_friends_with_negative_index_and_negative_length = array_splice($friends, -5, -2);
// print_r($removed_friends_with_negative_index_and_negative_length);

// $new_friends = ["rosy", "riya", "hima", "anuradha"];
// $removed_friends_with_length_and_add_new_data = array_splice($friends, 2, 2, $new_friends);
// print_r($removed_friends_with_length_and_add_new_data);

print_r($friends);


/*
    For associative array
*/

$all_friends = [
    "joy" => 1014,
    "pranta" => 1018,
    "ashu" => 1024,
    "sanjoy" => 1022,
    "abhishek" => 1046,
    "rony" => 1062,
    "srejon" => 1061,
];

// $removed_all_friends = array_splice($all_friends, 2);
// print_r($removed_all_friends);

// $removed_all_friends_with_length = array_splice($all_friends, 2, 2);
// print_r($removed_all_friends_with_length);

// *** changes when we want to remove and add new data by array_splice for associative array

$new_all_friends = [
    "rosy" => 1013,
    "riya" => 1010,
    "hima" => 1015,
    "anuradha" => 1052,
];

/*
    $removed_all_friends_with_length_and_add_new_data = array_splice($all_friends, 2, 2, $new_all_friends); // This will not give a best result.

    print_r($removed_all_friends_with_length_and_add_new_data);
*/

/*
    $all_friends1 = array_slice($all_friends, 0, 2);
    $all_friends2 = array_slice($all_friends, 4);
    $all_friends3 = $all_friends1 + $new_all_friends + $all_friends2;

    print_r($all_friends3);
*/

print_r($all_friends);
