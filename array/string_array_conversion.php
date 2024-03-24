<?php

/*
    String to array
*/

$friends_string = "joy, pranta, ashu, sanjoy, abhishek, rony, srejon";
echo $friends_string;

$friends_array = explode(', ', $friends_string); // Here ', ' is delimeter. By explode we can use one delimeter
print_r($friends_array);

$friends_string .= ",ridwan,sajid,sakib,bashar,nishat,nandan";
echo $friends_string;

$friends_array = preg_split('/(, |,)/', $friends_string); // By preg_split we can use multiple delimeter
print_r($friends_array);

/*
    Array to string
*/

$new_friends_string = join(', ', $friends_array);
echo $new_friends_string;
