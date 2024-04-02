<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handle Multiple File</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        margin-top: 30px;
    }

    .column {
        border: 1px solid #9b4dca;
        margin: 0 5px;
        padding: 5px;
    }

    h4 {
        text-align: center;
    }

    span {
        text-decoration: underline;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-70 column-offset-15">

                <h4><span>Handle Multiple File</span></h4>

                <?php

                $first_name = '';
                $last_name = '';
                $allowed_file_types = ['image/jpg', 'image/jpeg', 'image/png'];
                $move_dir = '../assets/';
                $file_name = '';
                $full_path = '';

                if (isset($_REQUEST['first_name']) && !empty($_REQUEST['first_name'])) {
                    $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
                }
                if (isset($_REQUEST['last_name']) && !empty($_REQUEST['last_name'])) {
                    $last_name =
                        filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
                }

                if ($_FILES && $_FILES['upload_file']) {
                    if (in_array($_FILES['upload_file']['type'], $allowed_file_types)) {
                        $file_name = $_FILES['upload_file']['name'];
                        $full_path = $move_dir . $file_name;
                        move_uploaded_file($_FILES['upload_file']['tmp_name'], $full_path);
                    }
                }

                ?>

                <p>First Name: <?php echo $first_name; ?> <br /> </p>
                <p>Last Name: <?php echo $last_name; ?> <br /> </p>
                <p>Image <br /> </p>

                <?php if ($full_path !== '') { ?>
                    <img src="<?php echo $full_path; ?>" alt="uploaded file" width="150px">
                <?php } ?>


                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>">

                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>">

                    <label for="upload_file">Upload Image</label>
                    <input type="file" name="upload_file" id="upload_file">

                    <br />

                    <button class="button" type="submit">Submit</button>
                </form>

            </div>
        </div>

    </div>
</body>

</html>