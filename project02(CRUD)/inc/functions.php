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

function addRecord($file_name, $data){
    $previous_data = generateReport($file_name);
    $found  = false;
    $status = 101;
    $message = '';
    $count_previous_data = count($previous_data);

    if($count_previous_data > 0){
        foreach ($previous_data as $record){
            if($record['roll'] == $data['roll']){
                $found = true;
                break;
            }
        }
    }

    if (!$found){
        $new_id['id'] = $count_previous_data + 1;
        $new_data = array_merge($new_id, $data);
        $previous_data[] = $new_data;
        $serialized_data = serialize($previous_data);
        file_put_contents($file_name, $serialized_data, LOCK_EX);
        $status = 100;
        $message = 'Data added successfully';
    }else{
        $message = 'Roll number already exists';
    }

    return [$status, $message];
}