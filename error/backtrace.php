<?php
function x($a): void
{
    y($a);
}

function y($b): void
{
    z($b*2);
}

function z($c): void
{
    if($c<20){
        trigger_error("Too Small {$c}\n");
    }else{
        echo "{$c} is okay\n";
    }

    debug_print_backtrace();

}

function w($d, $e): void
{
    x(($d+$e)*5);
}

z(23);

w(2,3);