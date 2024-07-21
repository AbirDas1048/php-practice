<?php
session_start([
    'cookie_lifetime' => 300,
]);

$_SESSION['logged_in'] = false;
$_SESSION['username'] = false;
$error = false;

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

$fp = fopen(getcwd()."/data/users.txt", "r");

if($username && $password){
    while($data = fgetcsv($fp)){
        if($username == $data[0] && sha1($password) == $data[1]){
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $data[2];
            header('location: /session/session_with_crud/index.php');
        }
    }
    if(!$_SESSION['logged_in']){
        $error = true;
    }
}

if(isset($_GET['logout'])){
    $_SESSION['logged_in'] = false;
    $_SESSION['username'] = false;
    session_destroy();
    header('location: /session/session_with_crud/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Auth Example</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<style>
    body {
        margin-top: 30px;
    }
</style>

<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>Simple Auth Example</h2>
        </div>
    </div>

    <div class="row">
        <div class="column column-60 column-offset-20">
            <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
                echo "Hello Admin, Welcome";
            }else{
                echo "Hello Stranger, Login Below";
            }
            ?>
        </div>
    </div>

    <div class="row" style="margin-top: 30px;">
        <div class="column column-60 column-offset-20">
            <?php
            if($error) {
                echo "<blockquote>Username and password didn't match</blockquote>";
            }

            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
                ?>
                <form method="POST">
                    <input type="hidden" name="logout" value="1">
                    <button class="button-primary" name="submit" type="submit">Log Out</button>
                </form>
            <?php
            } else {
                ?>
                <form method="POST">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">

                    <button class="button-primary" name="submit" type="submit">Log In</button>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>

</body>

</html>