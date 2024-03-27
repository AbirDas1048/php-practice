<?php

$number_index_array = [55, 89, 45, 66, 12, 4, 3, 9, 25, 95];
$string_index_array = ["joy", "pranta", "ashu", "sanjoy", "abhishek", "rony", "srejon"];
$string_associative_array = [
    "joy" => 1014,
    "pranta" => 1018,
    "ashu" => 1024,
    "sanjoy" => 1022,
    "abhishek" => 1046,
    "rony" => 1062,
    "srejon" => 1061,
];

/*
    Note: It always keeps the refernce of the original array. So, to test an operation uncomment it first.
*/

/*
    Example 1
    sort() => It sort only by value in ascending order. It changes the original index of the array.
*/

// sort($number_index_array);
// sort($string_index_array);
// sort($string_associative_array);

// print_r($number_index_array);
// print_r($string_index_array);
// print_r($string_associative_array);

/*
    Example 2
    rsort() => It sort only by value in descending order. It changes the original index of the array.
*/

// rsort($number_index_array);
// rsort($string_index_array);
// rsort($string_associative_array);

// print_r($number_index_array);
// print_r($string_index_array);
// print_r($string_associative_array);

/*
    Example 3
    asort() => It sort only by value in ascending order. It keeps the original index of the array.
*/

// asort($number_index_array);
// asort($string_index_array);
// asort($string_associative_array);

// print_r($number_index_array);
// print_r($string_index_array);
// print_r($string_associative_array);

/*
    Example 4
    asort() => It sort only by value in descending order. It keeps the original index of the array.
*/

// asort($number_index_array);
// asort($string_index_array);
// asort($string_associative_array);

// print_r($number_index_array);
// print_r($string_index_array);
// print_r($string_associative_array);

/*
    Example 5
    ksort() => It sort only by key in ascending order. It keeps the original index of the array.
*/

// ksort($number_index_array);
// ksort($string_index_array);
// ksort($string_associative_array);

// print_r($number_index_array);
// print_r($string_index_array);
// print_r($string_associative_array);

/*
    Example 6
    krsort() => It sort only by key in descending order. It keeps the original index of the array.
*/

// krsort($number_index_array);
// krsort($string_index_array);
// krsort($string_associative_array);

// print_r($number_index_array);
// print_r($string_index_array);
// print_r($string_associative_array);

/*
    Example 7
    sort with different kind of flag
*/

$new_number_index_array = [55, 89, 45, 66, 12, 4, 3, 9, 25, 95];

// sort($new_number_index_array, SORT_REGULAR);
// print_r($new_number_index_array);

// sort($new_number_index_array, SORT_NUMERIC);
// print_r($new_number_index_array);

// sort($new_number_index_array, SORT_STRING);
// print_r($new_number_index_array);


$new_string_index_array = ["joy", "pranta", "ashu", "sanjoy", "Joy", "Pranta", "Ashu", "Sanjoy"];

// sort($new_string_index_array, SORT_REGULAR);
// print_r($new_string_index_array);

// sort($new_string_index_array, SORT_NUMERIC);
// print_r($new_string_index_array);

// sort($new_string_index_array, SORT_STRING);
// print_r($new_string_index_array);

// sort($new_string_index_array, SORT_STRING | SORT_FLAG_CASE);
// print_r($new_string_index_array);
