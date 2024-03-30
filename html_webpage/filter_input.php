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

                if (isset($_GET['first_name']) && !empty($_GET['first_name'])) {
                    $first_name = htmlspecialchars($_GET['first_name']);
                }
                if (isset($_REQUEST['last_name']) && !empty($_REQUEST['last_name'])) {
                    $last_name = htmlspecialchars($_REQUEST['last_name']);
                }
                ?>

                <p>First Name: <?php echo $first_name; ?> <br /> </p>
                <p>Last Name: <?php echo $last_name; ?> <br /> </p>

                <form action="" method="GET">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name">

                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name">

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">

                    <label for="designation">Designation</label>
                    <input type="text" name="designation" id="designation">

                    <button class="button" type="submit">Submit GET</button>
                </form>

            </div>
        </div>

    </div>
</body>

</html>