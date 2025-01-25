<?php
spl_autoload_register(function ($class_name){
    $path = str_replace("CloudStorage\\", "", $class_name) . '.php';
    include $path;
});