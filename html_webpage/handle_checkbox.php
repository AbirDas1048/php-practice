<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handle Checkbox</title>
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

                <h4><span>Handle Checkbox</span></h4>

                <?php
                $first_name = '';
                $last_name = '';
                $is_developer = '';
                $fav_prog_lang = [];

                if (isset($_GET['first_name']) && !empty($_GET['first_name'])) {
                    $first_name = htmlspecialchars($_GET['first_name']);
                }
                if (isset($_REQUEST['last_name']) && !empty($_REQUEST['last_name'])) {
                    $last_name = htmlspecialchars($_REQUEST['last_name']);
                }

                if (isset($_REQUEST['is_developer']) && $_REQUEST['is_developer'] == 1) {
                    $is_developer = 'checked';
                }

                if (isset($_REQUEST['fav_prog_lang'])) {
                    $fav_prog_lang = $_REQUEST['fav_prog_lang'];
                }

                function isChecked($input_array, $value)
                {
                    $show = '';
                    if (in_array($value, $input_array)) {
                        $show = 'checked';
                    }
                    echo $show;
                }

                ?>

                <p>First Name: <?php echo $first_name; ?> <br /> </p>
                <p>Last Name: <?php echo $last_name; ?> <br /> </p>
                <p>Is Developer: <?php echo $is_developer == 'checked' ? 'Yes' : ''; ?> <br /> </p>
                <p>Favourite Programming Language: <?php echo implode(", ", $fav_prog_lang); ?> <br /> </p>

                <form action="" method="GET">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>">

                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>">

                    <input type="checkbox" id="is_developer" name="is_developer" value="1" <?php echo $is_developer; ?>>
                    <label class="label-inline" for="is_developer">Is Developer</label>

                    <br />

                    <label class="label">Favourite Programming Language</label>

                    <input type="checkbox" name="fav_prog_lang[]" value="PHP" <?php isChecked($fav_prog_lang, 'PHP'); ?>>
                    <label class="label-inline">PHP</label>

                    <input type="checkbox" name="fav_prog_lang[]" value="Java" <?php isChecked($fav_prog_lang, 'Java'); ?>>
                    <label class="label-inline">Java</label>

                    <input type="checkbox" name="fav_prog_lang[]" value="Python" <?php isChecked($fav_prog_lang, 'Python'); ?>>
                    <label class="label-inline">Python</label>

                    <input type="checkbox" name="fav_prog_lang[]" value="JS" <?php isChecked($fav_prog_lang, 'JS'); ?>>
                    <label class="label-inline">JS</label>

                    <input type="checkbox" name="fav_prog_lang[]" value="C#" <?php isChecked($fav_prog_lang, 'C#'); ?>>
                    <label class="label-inline">C#</label>

                    <br />

                    <button class="button" type="submit">Submit GET</button>
                </form>

            </div>
        </div>

    </div>
</body>

</html>