<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Input</title>
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

                <h4><span>Filter Inputs</span></h4>

                <?php
                $first_name = '';
                $last_name = '';
                $email = '';
                $designation = '';

                if (isset($_GET['first_name']) && !empty($_GET['first_name'])) {
                    $first_name = htmlspecialchars($_GET['first_name']);
                }
                if (isset($_REQUEST['last_name']) && !empty($_REQUEST['last_name'])) {
                    $last_name = htmlspecialchars($_REQUEST['last_name']);
                }

                if (isset($_REQUEST['email']) && !empty($_REQUEST['email'])) {
                    // $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);

                    $email = filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL);
                }

                if (isset($_GET['designation']) && !empty($_GET['designation'])) {
                    $designation = filter_input(INPUT_GET, "designation", FILTER_SANITIZE_SPECIAL_CHARS);
                }
                ?>

                <p>First Name: <?php echo $first_name; ?> <br /> </p>
                <p>Last Name: <?php echo $last_name; ?> <br /> </p>
                <p>Email: <?php echo $email; ?> <br /> </p>
                <p>Designation: <?php echo $designation; ?> <br /> </p>

                <form action="" method="GET">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>">

                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>">

                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="<?php echo $email; ?>">

                    <label for="designation">Designation</label>
                    <input type="text" name="designation" id="designation" value="<?php echo $designation; ?>">

                    <button class="button" type="submit">Submit GET</button>
                </form>

            </div>
        </div>

    </div>
</body>

</html>