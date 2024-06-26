<?php

$file_name = getcwd() . "/file_handling/data/friend_info_serialized.txt";
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

$data = serialize($infos);
file_put_contents($file_name, $data, LOCK_EX);

$export_from_file = file_get_contents($file_name);
$export_data = unserialize($export_from_file);
print_r($export_data);


// Remove from serialized data

unset($export_data[1]);
$new_data = serialize($export_data);
file_put_contents($file_name, $new_data, LOCK_EX);

// add new data as serialized data

$new_info = [
    [
        'first_name' => "Sanjoy",
        'last_name' => "Biswas",
        'id' => "1022",
        'email' => "sanjoy@gmail.com",
    ]
];

array_push($infos, $new_info);
$new_info_data = serialize($infos);
file_put_contents($file_name, $new_info_data, LOCK_EX);
