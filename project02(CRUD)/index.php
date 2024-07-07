<?php
require_once 'inc/functions.php';
$task = $_GET['task'] ?? 'report';
if ($task == 'seed') {
    seed(DB_NAME);
    $info = "Seeding is completed";
}
$data = [];
if ($task == 'report') {
    $data = generateReport(DB_NAME);
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
    <?php
    if ($task == 'report') {
        ?>
        <div class="row">
        <div class="column column-60 column-offset-20">
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(count($data) > 0){
                    foreach ($data as $record){
                        ?>
                <tr>
                    <td><?php echo $record['roll']; ?></td>
                    <td><?php echo $record['first_name'] . ' ' . $record['last_name']; ?></td>
                    <td><?php echo $record['email']; ?></td>
                    <td><a href="#">EDIT</a> | <a href="#">DELETE</a></td>
                    <?php
                    }
                } else{ ?>
                        <td colspan="4">No Data Found</td>
                    <?php } ?>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    }
    ?>

</div>
</body>
</html>