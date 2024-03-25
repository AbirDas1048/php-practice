<?php

$info = [
    "first_name" => "Abir",
    "last_name" => "Das",
    "email" => "abir...@gmail.com",
    "position" => "Software Developer"
];

$personal_info = $info; // Copy by value or deep copy

$personal_info["email"] = "abirdas...@gmail.com";

print_r($info);
print_r($personal_info);

$personal_info = &$info; // Copy by reference or shallow copy

$personal_info["position"] = "Software Engineer";

print_r($info);
print_r($personal_info);
