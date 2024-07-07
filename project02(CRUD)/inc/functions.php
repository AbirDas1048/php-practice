<?php
define('DB_NAME', getcwd().'/data/db.txt');
function seed($file_name): void
{
    $data = [
        [
            "id" => 1,
            "first_name" => "Joy",
            "last_name" => "Gosh",
            "email" => "joy...@gmail.com",
            "roll" => 1014
        ],
        [
            "id" => 2,
            "first_name" => "Pranta",
            "last_name" => "Dutta",
            "email" => "pranta...@gmail.com",
            "roll" => 1018
        ],
        [
            "id" => 3,
            "first_name" => "Ashu",
            "last_name" => "Mazumder",
            "email" => "ashu...@gmail.com",
            "roll" => 1024
        ],
        [
            "id" => 4,
            "first_name" => "Sanjoy",
            "last_name" => "Biswas",
            "email" => "sanjoy...@gmail.com",
            "roll" => 1022
        ],
        [
            "id" => 5,
            "first_name" => "Srejon",
            "last_name" => "Sharma",
            "email" => "srejon...@gmail.com",
            "roll" => 1052
        ],
        [
            "id" => 6,
            "first_name" => "Rony",
            "last_name" => "Saha",
            "email" => "rony...@gmail.com",
            "roll" => 1062
        ]
    ];

    $serialized_data = serialize($data);
    file_put_contents($file_name, $serialized_data, LOCK_EX);
}

function generateReport($file_name){
    $data = [];
    if (!empty($file_name) && file_exists($file_name)){
        $serialized_data = file_get_contents($file_name);
        $data = unserialize($serialized_data);
    }
    return $data;

}