<?php

$file_name = getcwd() . "/file_handling/data/friend_info.txt";
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

// Write in the file
$fp = fopen($file_name, 'w');
foreach ($infos as $info) {
    $data = sprintf("%s,%s,%s,%s\n", $info['first_name'], $info['last_name'], $info['id'], $info['email']);
    fwrite($fp, $data);
}
fclose($fp);
