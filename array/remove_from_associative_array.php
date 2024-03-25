<?php

$info = [
    "first_name" => "Abir",
    "last_name" => "Das",
    "email" => "abir...@gmail.com",
    "position" => "Software Developer"
];

unset($info['position']);

print_r($info);
