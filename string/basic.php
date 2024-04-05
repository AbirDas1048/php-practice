<?php

$name = 'Abir Das';
$designation = 'Software Engineer';

$string_1 = 'My name is $name.\nI am a $designation.';
$string_2 = "My name is $name. \nI am a $designation";

echo $string_1 . "\n";
echo
$string_2 . "\n";

$heredoc = <<<EOD
My name is $name.
I am a $designation.
Loves to Travel\tand\tCoding.
EOD;

echo $heredoc;
