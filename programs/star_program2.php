<?php

// Inverted Right Triangle Star Pattern
$n = 10;
for ($i = $n; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
        printf("*");
    }
    echo PHP_EOL;
}

/* 
    Output:
    **********
    *********
    ********
    *******
    ******
    *****
    ****
    ***
    **
    *
*/