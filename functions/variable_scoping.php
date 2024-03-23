<?php

$first_name = "Abir"; // Global variable
$last_name = "Das"; // Global variable

function personalInformation()
{
    $email = "abir...@gmail.com";

    // Local variable. It can't be use outside of this function. If we make this variable as global we can use it anywhere.

    /*
        printf("The email of {$first_name} {$last_name} is {$email}\n");

        // This will give error. Because we didn't define $first_name and $last_name
    */


    // We can use global variable in two way.

    /*
        Example 1

        global $first_name, $last_name; 
        
        // It search or make the variables as global. Then we can use it anywhere. But this is not a good practice.

        printf("The email of {$first_name} {$last_name} is {$email}\n");

    */

    /*
        Example 2

        printf("The email of {$GLOBALS['first_name']} {$GLOBALS['last_name']} is {$email}\n");

        // Here $GLOBALS[] is a super global variable array.

    */

    printf("The email of {$GLOBALS['first_name']} {$GLOBALS['last_name']} is {$email}\n");
}

function professionalInformation()
{
    global $designation;
    $designation = "Software Engineer";

    // Global variable. It can't be use anywhere. But not a good practice.

    printf("The designation of {$GLOBALS['first_name']} {$GLOBALS['last_name']} is {$designation}\n");
}

personalInformation();

professionalInformation();

/*
    printf("The email of {$first_name} {$last_name} is {$email}\n");

    // This will give error. Because we didn't define $email.
*/

/*
    printf("The designation of {$first_name} {$last_name} is {$designation}\n");

    // This will not give error. Because we define $designation as global in function professionalInformation.
*/
