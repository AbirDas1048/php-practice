<?php
require_once 'inc/functions.php';
$task = $_GET['task'] ?? 'report';
if ($task == 'seed') {
    seed(DB_NAME);
    $info = "Seeding is completed";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>CRUD</h2>
            <p>A simple project to perform CRUD operations using plain files and PHP</p>
            <?php include_once ('inc/templates/nav.php'); ?>
            <hr/>
            <p><?php echo $info ?? ""; ?></p>
        </div>
    </div>
</div>
</body>
</html>