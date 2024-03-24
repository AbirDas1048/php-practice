<?php
$friends = [
    "school" => array("shuvo", "pranta", "ador", "rafi", "shuvro", "sakib", "rana"),
    "college" => array(
        "mahi", "tushar", "gias", "ansar", "arif", "sohan", "firoz"
    ),
    "university" => array(
        "joy", "pranta", "ashu", "sanjoy", "abhishek", "rony", "srejon"
    )
];

print_r($friends);

$friends = [
    "school" => ["shuvo", "pranta", "ador", "rafi", "shuvro", "sakib", "rana"],
    "college" => ["mahi", "tushar", "gias", "ansar", "arif", "sohan", "firoz"],
    "university" => [
        "boy" => ["joy", "pranta", "ashu", "sanjoy", "abhishek", "rony", "srejon"],
        "girl" => ["rosy", "riya", "hima", "nazifa", "puja", "ibna", "anuradha"],
    ]
];

print_r($friends);
array_push($friends['university']['boy'], "shouvik");
print_r($friends['university']['boy']);
echo $friends['university']['girl'][0];
