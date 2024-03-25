<?php

$name = "Abir";

if (isset($name)) {
    echo "Name is set\n";
} else {
    echo "Name is not set\n";
}

if (empty($name)) {
    echo "Name is empty\n";
} else {
    echo "Name is not empty\n";
}

if (isset($name) && (is_numeric($name) || $name != '')) {
    echo "Name is set and is not empty\n";
} else {
    echo "Name is not set or it's empty\n";
}
