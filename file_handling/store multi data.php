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

// Read from the file
$fp = fopen($file_name, 'r');

while ($data = fgets($fp)) {
    $info = explode(",", $data);
    printf("First Name => %s\nLast Name => %s\nID => %s\nEmail => %s\n\n", $info[0], $info[1], $info[2], $info[3]);
}
fclose($fp);

// Write in the file by comma separated value (CSV)
$fp = fopen($file_name, 'w');
foreach ($infos as $info) {
    fputcsv($fp, $info);
}
fclose($fp);

// Read from the file by comma separated value (CSV)
$fp = fopen($file_name, 'r');

while ($data = fgetcsv($fp)) {
    printf("First Name => %s\nLast Name => %s\nID => %s\nEmail => %s\n\n", $data[0], $data[1], $data[2], $data[3]);
}
fclose($fp);

// Remove a line by line no or index from the file

$all_data = file($file_name);
echo "Before unset" . PHP_EOL;
print_r($all_data);
echo PHP_EOL;
unset($all_data[1]);
echo "After unset" . PHP_EOL;
print_r($all_data);
echo PHP_EOL;

$fp = fopen($file_name, 'w');
foreach ($all_data as $data) {
    fwrite($fp, $data);
}
fclose($fp);

// add new data in the file

$new_info = [
    [
        'first_name' => "Sanjoy",
        'last_name' => "Biswas",
        'id' => "1022",
        'email' => "sanjoy@gmail.com",
    ]
];

$fp = fopen($file_name, 'a');
foreach ($new_info as $info) {
    fputcsv($fp, $info);
}
fclose($fp);

$all_data = file($file_name);
echo "After add new data" . PHP_EOL;
print_r($all_data);
echo PHP_EOL;
