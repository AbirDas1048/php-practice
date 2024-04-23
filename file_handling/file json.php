<?php

$file_name = getcwd() . "/file_handling/data/friend_info_json.txt";
$infos = [
    [
        'first_name' => "Joy",
        'last_name' => "Gosh",
        'id' => "1014",
        'email' => "joy@gmail.com",
    ],
    [
        'first_name' => "Pranta",
        'last_name' => "Dutta",
        'id' => "1018",
        'email' => "pranta@gmail.com",
    ],
    [
        'first_name' => "Ashu",
        'last_name' => "Mazumder",
        'id' => "1024",
        'email' => "ashu@gmail.com",
    ]
];

$data = json_encode($infos);
file_put_contents($file_name, $data, LOCK_EX);

$file_data = file_get_contents($file_name);
$decoded_data_without_associate = json_decode($file_data);
$decoded_data_with_associate = json_decode($file_data, true);
print_r($decoded_data_without_associate);
echo PHP_EOL;
print_r($decoded_data_with_associate);
