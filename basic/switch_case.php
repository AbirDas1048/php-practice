<?php

/*
    Example 1
*/

$number1 = 20;
$number2 = 10;
$operation = '+';

switch ($operation) {
    case '+':
        printf("The sum of {$number1} and {$number2} is %s", $number1 + $number2);
        break;
    case '-':
        printf("The subtraction of {$number1} and {$number2} is %s", $number1 - $number2);
        break;
    case '*':
        printf("The multiplication of {$number1} and {$number2} is %s", $number1 * $number2);
        break;
    case '/':
        printf("The division of {$number1} and {$number2} is %s", $number1 / $number2);
        break;
    case '%':
        printf("The modulus of {$number1} and {$number2} is %s", $number1 % $number2);
        break;
    default:
        printf("Operation can't idenify");
}

echo "\n";

/*
    Example 2
*/

$marks = 85;

switch (true) {
    case ($marks <= 100 and $marks >= 80):
        printf("Grade is A+. Point is 4.00");
        break;
    case ($marks < 80 and $marks >= 75):
        printf("Grade is A. Point is 3.75");
        break;
    case ($marks < 75 and $marks >= 70):
        printf("Grade is A-. Point is 3.50");
        break;
    case ($marks < 70 and $marks >= 65):
        printf("Grade is B+. Point is 3.25");
        break;
    case ($marks < 65 and $marks >= 60):
        printf("Grade is B. Point is 3.00");
        break;
    case ($marks < 60 and $marks >= 55):
        printf("Grade is B-. Point is 2.75");
        break;
    case ($marks < 55 and $marks >= 50):
        printf("Grade is C+. Point is 2.50");
        break;
    case ($marks < 50 and $marks >= 45):
        printf("Grade is C. Point is 2.25");
        break;
    case ($marks < 45 and $marks >= 40):
        printf("Grade is C-. Point is 2.00");
        break;
    case ($marks < 40):
        printf("Grade is F. Point is 0.00");
        break;
    default:
        printf("Not a relevant number");
}
