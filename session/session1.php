<?php
session_name('myapp');
session_start([
    'cookie_lifetime' => 60,
]);
$_SESSION['name'] = "John Doe";

echo $_SESSION['name'];
session_destroy();