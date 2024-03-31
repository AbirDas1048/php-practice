<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handle Select</title>
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

                <h4><span>Handle Select</span></h4>

                <?php
                $first_name = '';
                $last_name = '';
                $is_developer = '';
                $fav_prog_lang = ['PHP', 'Java', 'Python', 'JS', 'C#'];
                $selected_fav_prog_lang = [];

                if (isset($_GET['first_name']) && !empty($_GET['first_name'])) {
                    $first_name = htmlspecialchars($_GET['first_name']);
                }
                if (isset($_REQUEST['last_name']) && !empty($_REQUEST['last_name'])) {
                    $last_name = htmlspecialchars($_REQUEST['last_name']);
                }

                if (isset($_REQUEST['is_developer'])) {
                    $is_developer = filter_input(INPUT_GET, 'is_developer', FILTER_SANITIZE_SPECIAL_CHARS);
                }

                if (isset($_REQUEST['selected_fav_prog_lang'])) {
                    $selected_fav_prog_lang = filter_input(INPUT_GET, 'selected_fav_prog_lang', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                }

                function options($default_list, $selected_list)
                {
                    foreach ($default_list as $list) {
                        $selected = in_array($list, $selected_list) ? ' selected ' : '';
                        printf('<option value="%1$s"%2$s>%1$s</option>' . "\n", $list, $selected);
                    }
                }

                ?>

                <p>First Name: <?php echo $first_name; ?> <br /> </p>
                <p>Last Name: <?php echo $last_name; ?> <br /> </p>
                <p>Is Developer: <?php echo ucfirst($is_developer); ?> <br /> </p>
                <p>Favourite Programming Language: <?php echo join(", ", $selected_fav_prog_lang); ?> <br /> </p>

                <form action="" method="GET">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>">

                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>">

                    <label for="is_developer">Is Developer</label>
                    <select id="is_developer" name="is_developer">
                        <option value="" disabled selected>Please select an option</option>
                        <option value="yes" <?php echo $is_developer == 'yes' ? 'selected' : ''; ?>>Yes</option>
                        <option value="no" <?php echo $is_developer == 'no' ? 'selected' : ''; ?>>No</option>
                    </select>

                    <label for="selected_fav_prog_lang">Favourite Programming Language</label>
                    <select id="selected_fav_prog_lang" name="selected_fav_prog_lang[]" multiple>
                        <option value="">Please select an option</option>
                        <?php options($fav_prog_lang, $selected_fav_prog_lang); ?>
                    </select>

                    <button class="button" type="submit">Submit GET</button>
                </form>

            </div>
        </div>

    </div>
</body>

</html>