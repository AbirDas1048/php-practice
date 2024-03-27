<?php
$number_index_array = [55, 89, 45, 66, 12, 4, 3, 9, 25, 95];
$string_index_array = ["joy", "pranta", "ashu", "sanjoy", "abhishek", "rony", "srejon", "55", "89"];
$string_associative_array = [
    "joy" => 1014,
    "pranta" => 1018,
    "ashu" => 1024,
    "sanjoy" => 1022,
    "abhishek" => 1046,
    "rony" => 1062,
    "srejon" => 1061,
];

$find_value_in_number_index_array = 9;
$find_value_in_string_index_array = 'ashu';
$find_key_in_string_associative_array = 'rony';

if (in_array($find_value_in_number_index_array, $number_index_array)) {
    echo "{$find_value_in_number_index_array} is found.\n";
} else {
    echo "{$find_value_in_number_index_array} not found.\n";
}

// To check value and type use third parameter.

if (in_array($find_value_in_string_index_array, $string_index_array, true)) {
    echo "{$find_value_in_string_index_array} is found.\n";
} else {
    echo "{$find_value_in_string_index_array} not found.\n";
}

// To get offset or index.

$offset = array_search($find_value_in_string_index_array, $string_index_array, true);

echo "{$offset}\n";

// check key.

if (key_exists($find_key_in_string_associative_array, $string_associative_array)) {
    echo "{$find_key_in_string_associative_array} is found.\n";
} else {
    echo "{$find_key_in_string_associative_array} not found.\n";
}
