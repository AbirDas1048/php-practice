<?php
require_once 'inc/functions.php';
$task = $_GET['task'] ?? 'report';
if ($task == 'seed') {
    seed(DB_NAME);
    $_GET['message'] = "Seeding is completed";
}
$data = [];
$id = '';
$first_name = '';
$last_name = '';
$email = '';
$roll = '';
if ($task == 'report') {
    $data = generateReport(DB_NAME);
}

if(isset($_POST['submit'])){
    $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $roll = filter_input(INPUT_POST, 'roll', FILTER_SANITIZE_NUMBER_INT);
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

    $data['first_name'] = $first_name ?? '';
    $data['last_name'] = $last_name ?? '';
    $data['email'] = $email ?? '';
    $data['roll'] = $roll ?? '';
    $data['id'] = $id ?? '';

    if(!empty($id)){
        [$status, $message] = editRecord(DB_NAME, $data);
        if($status == 101){
            header("location: /project02(CRUD)/index.php?task=report&message=$message");
        }else{
            header("location: /project02(CRUD)/index.php?task=edit&id=$id&message=$message");
        }
    }else{
        [$status, $message] = addRecord(DB_NAME, $data);
        if($status == 100){
            header("location: /project02(CRUD)/index.php?task=report&message=$message");
        }else{
            $_GET['message'] = $message;
        }
    }
}

if($task == 'edit' && isset($_GET['id'])){
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    [$status, $student] = getStudent($id);

    if($status == 100){
        $id = $student['id'] ?? '';
        $first_name = $student['first_name'] ?? '';
        $last_name = $student['last_name'] ?? '';
        $email = $student['email'] ?? '';
        $roll = $student['roll'] ?? '';
    }else{
        $message = 'No student found with the id';
        header("location: /project02(CRUD)/index.php?task=report&message=$message");
    }
}

if($task == 'delete' && isset($_GET['id'])){
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    [$status, $message] = deleteStudent($id);

    if($status == 100){
        header("location: /project02(CRUD)/index.php?task=report&message=$message");
    }else{
        $message = 'Something went wrong';
        header("location: /project02(CRUD)/index.php?task=report&message=$message");
    }
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
        </div>
    </div>

    <?php if(isset($_GET['message'])){ ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <blockquote>
                    <?php echo $_GET['message']; ?>
                </blockquote>
            </div>
        </div>
    <?php } ?>

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
                    <td><a href="/project02(CRUD)/index.php?task=edit&id=<?php echo $record['id']; ?>">EDIT</a> | <a class="delete" href="/project02(CRUD)/index.php?task=delete&id=<?php echo $record['id']; ?>">DELETE</a></td>
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

    <?php
    if ($task == 'add') {
        ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="/project02(CRUD)/index.php?task=add" method="POST">

                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>">

                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>">

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo $email; ?>">

                    <label for="roll">Roll</label>
                    <input type="number" name="roll" id="roll" value="<?php echo $roll; ?>">

                    <button type="submit" class="button-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
        <?php
    }
    ?>

    <?php
    if ($task == 'edit') {
        ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="/project02(CRUD)/index.php?task=edit" method="POST">

                    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>">

                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>">

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo $email; ?>">

                    <label for="roll">Roll</label>
                    <input type="number" name="roll" id="roll" value="<?php echo $roll; ?>">

                    <button type="submit" class="button-primary" name="submit">Update</button>
                </form>
            </div>
        </div>
        <?php
    }
    ?>
</div>

<script src="assets/js/scripts.js"></script>
</body>
</html>