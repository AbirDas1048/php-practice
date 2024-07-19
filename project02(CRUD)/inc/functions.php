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

function generateReport($file_name): array
{
    $data = [];
    if (!empty($file_name) && file_exists($file_name)){
        $serialized_data = file_get_contents($file_name);
        $data = unserialize($serialized_data);
    }
    return $data;
}

function getNewId($previous_data): int
{
    $max_id = max(array_column($previous_data, 'id'));

    return $max_id + 1;
}

function addRecord($file_name, $data): array
{
    $previous_data = generateReport($file_name);
    $found  = false;
    $status = 101;
    $message = 'Roll number already exists';
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
        $data['id'] = getNewId($previous_data);

        $previous_data[] = $data;
        $serialized_data = serialize($previous_data);
        file_put_contents($file_name, $serialized_data, LOCK_EX);
        $status = 100;
        $message = 'Data added successfully';
    }

    return [$status, $message];
}

function getStudent($id): array
{
    $data = generateReport(DB_NAME);
    $status = 101;
    $student = [];
    $count_previous_data = count($data);

    if($count_previous_data > 0){
        foreach ($data as $record){
            if($record['id'] == $id){
                $status = 100;
                $student = $record;
                break;
            }
        }
    }
    return [$status, $student];
}

function editRecord($file_name, $data): array
{
    $previous_data = generateReport($file_name);
    $found = false;
    $status = 101;
    $message = 'Something went wrong';
    $count_previous_data = count($previous_data);

    if($count_previous_data > 0){
        if($previous_data[$data['id'] - 1]){
            foreach ($previous_data as $record){
                if($record['roll'] == $data['roll'] && $record['id'] != $data['id']){
                    $found = true;
                    $status = 102;
                    $message = 'Roll number already exists';
                    break;
                }
            }

            if (!$found){
                $previous_data[$data['id'] - 1]['first_name'] = $data['first_name'];
                $previous_data[$data['id'] - 1]['last_name'] = $data['last_name'];
                $previous_data[$data['id'] - 1]['email'] = $data['email'];
                $previous_data[$data['id'] - 1]['roll'] = $data['roll'];
                $serialized_data = serialize($previous_data);
                file_put_contents($file_name, $serialized_data, LOCK_EX);
                $status = 100;
                $message = 'Data updated successfully';
            }
        }
    }

    return [$status, $message];
}
function deleteStudent($id): array
{
    $previous_data = generateReport(DB_NAME);
    $status = 101;
    $message = 'Something went wrong';
    if($previous_data[$id - 1]){
        unset($previous_data[$id - 1]);
        $serialized_data = serialize($previous_data);
        file_put_contents(DB_NAME, $serialized_data, LOCK_EX);
        $status = 100;
        $message = 'Data deleted successfully';
    }

    return [$status, $message];
}