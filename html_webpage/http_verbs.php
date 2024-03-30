<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
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
            <div class="column">

                <h4>HTTP Verbs: <span>GET Method</span></h4>

                <?php if (isset($_GET['first_name']) && !empty($_GET['first_name'])) { ?>
                    <p>First Name: <?php echo $_GET['first_name']; ?> <br /> </p>
                <?php } ?>

                <?php if (isset($_GET['last_name']) && !empty($_GET['last_name'])) { ?>
                    <p>Last Name: <?php echo $_GET['last_name']; ?> <br /> </p>
                <?php } ?>

                <form action="" method="GET">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name">

                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name">

                    <button class="button" type="submit">Submit GET</button>
                </form>

            </div>

            <div class="column">

                <h4>HTTP Verbs: <span>POST Method</span></h4>

                <?php if (isset($_POST['email']) && !empty($_POST['email'])) { ?>
                    <p>Email: <?php echo $_POST['email']; ?> <br /> </p>
                <?php } ?>

                <?php if (isset($_POST['designation']) && !empty($_POST['designation'])) { ?>
                    <p>Designation: <?php echo $_POST['designation']; ?> <br /> </p>
                <?php } ?>

                <form action="" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">

                    <label for="designation">Designation</label>
                    <input type="text" name="designation" id="designation">

                    <button class="button" type="submit">Submit POST</button>
                </form>

            </div>
        </div>


    </div>
</body>

</html>