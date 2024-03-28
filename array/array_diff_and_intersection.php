<?php

$number_index_array1 = [11, 58, 48, 32, 49, 73, 91, 46, 26];
$number_index_array2 = [72, 48, 37, 74, 69, 12, 31, 98, 11];

$string_index_array1 = ["joy", "pranta", "ashu", "sanjoy", "abhishek", "rony", "srejon"];
$string_index_array2 = ["habib", "sajid", "sakib", "shouvik", "Joy", "nandan", "nishat"];

$associative_array1 = [
    "joy" => 1014,
    "pranta" => 1018,
    "ashu" => 1024,
    "sanjoy" => 1022,
    "abhishek" => 1046,
    "rony" => 1062,
    "srejon" => 1061,
    "asru" => 1037,
];

$associative_array2 = [
    "habib" => 1058,
    "sajid" => 1063,
    "Asru" => 1037,
    "sakib" => 1044,
    "shouvik" => 1034,
    "joy" => 1014,
    "nandan" => 1059,
    "nishat" => 1057,
];

/*
    array_intersect(array1, array2) => This function find the common value of array1 in array2
*/
$common_number_index_array = array_intersect($number_index_array1, $number_index_array2);
print_r($common_number_index_array);

$common_string_index_array = array_intersect($string_index_array1, $string_index_array2);
print_r($common_string_index_array);

$common_associative_array = array_intersect($associative_array1, $associative_array2);
print_r($common_associative_array);

/*
    array_intersect_assoc(array1, array2) => This function find the common value with their key position or index of array1 in array2
*/
$common_assoc_number_index_array = array_intersect_assoc($number_index_array1, $number_index_array2);
print_r($common_assoc_number_index_array);

$common_assoc_string_index_array = array_intersect_assoc($string_index_array1, $string_index_array2);
print_r($common_assoc_string_index_array);

$common_assoc_associative_array = array_intersect_assoc($associative_array1, $associative_array2);
print_r($common_assoc_associative_array);

/*
    array_diff(array1, array2) => This function find the difference value of array1 in array2
*/
$difference_number_index_array = array_diff($number_index_array1, $number_index_array2);
print_r($difference_number_index_array);

$difference_string_index_array = array_diff($string_index_array1, $string_index_array2);
print_r($difference_string_index_array);

$difference_associative_array = array_diff($associative_array1, $associative_array2);
print_r($difference_associative_array);

/*
    array_diff_assoc(array1, array2) => This function find the difference value with their key position or index of array1 in array2
*/
$difference_assoc_number_index_array = array_diff_assoc($number_index_array1, $number_index_array2);
print_r($difference_assoc_number_index_array);

$difference_assoc_string_index_array = array_diff_assoc($string_index_array1, $string_index_array2);
print_r($difference_assoc_string_index_array);

$difference_assoc_associative_array = array_diff_assoc($associative_array1, $associative_array2);
print_r($difference_assoc_associative_array);
