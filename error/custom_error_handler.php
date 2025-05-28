<?php
function customErrorHandler($err_no, $err_str, $err_file, $err_line): bool
{
    echo "Error [$err_no]: $err_str in $err_file on line number $err_line\n";
    return true;
}

set_error_handler("customErrorHandler");

echo $book;