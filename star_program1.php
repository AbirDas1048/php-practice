<?php

// Right Triangle Star Pattern
$n = 10;
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $i; $j++) {
        printf("*");
    }
    echo PHP_EOL;
}

/* 
    Output:
    *
    **
    ***
    ****
    *****
    ******
    *******
    ********
    *********
*/