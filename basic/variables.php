<?php
/*
Types of variable
    Integer
    Double / FLoat
    String
    Boolean
    Null
    Array
    Object
    Resource
*/

$name = 'Abir Das'; // String type variable.
$code = 1048; // Number type variable.

$my_email = 'abir...@email.com'; // Snake Case.
$myEmail = 'abirdas...@email.com'; // Camel Case.
$MyEmail = 'my_email'; // Pascal Case.

echo $myEmail . "\n"; // Output: abirdas...@email.com
echo $$MyEmail . "\n"; // Output: abir...@email.com

// *** Example-1 ***
echo 'My name is ' . $name . "\n"; // Output: My name is Abir Das
echo "My shortcode is $code \n"; //  Output: My shortcode is 1048

// *** Example-2 ***
echo "My name is $name. My shortcode is $code.\nMy email is {$my_email}. Thank you."; 
/*
Output: My name is Abir Das. My shortcode is 1048.
My email is abir...@email.com. Thank you.
*/