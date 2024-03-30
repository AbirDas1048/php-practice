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
    body {
        margin-top: 30px;
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
            <div class="column column-60 column-offset-20">
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

                    <button class="button" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>