<?php

// Star Program
for ($i = 0; $i < 10; $i++) {
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