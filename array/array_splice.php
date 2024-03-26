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
