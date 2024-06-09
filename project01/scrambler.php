<?php
include_once "functions.php";
$mode = 'encode';
$mode = $_GET['task'] ?? 'encode';
$key = $original_key = 'abcdefghijklmnopqrstuvwxyz1234567890';
if($mode == "key"){
    $key_original = str_split($key);
    shuffle($key_original);
    $key = join('', $key_original);
}elseif (isset($_POST['key']) && $_POST['key'] !== ''){
    $key = $_POST['key'];
}
$scrambler_data = '';
if($mode == 'encode'){
    $data = $_POST['data'] ?? '';
    if($data != ''){
        $scrambler_data = scramblerData($data, $key);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Scrambler</title>
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

    #data{
        width: 100%;
        height: 160px;
    }

    #result{
        width: 100%;
        height: 160px;
    }

    .hidden{
        display: none;
    }
</style>

<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>Data Scrambler</h2>
            <p>Use this application to scramble your data</p>
            <p>
                <a href="scrambler.php?task=encode">Encode</a> |
                <a href="scrambler.php?task=decode">Decode</a> |
                <a href="scrambler.php?task=key">Generate Key</a>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
        <form action="scrambler.php" method="POST">
            <label for="key">key</label>
            <input type="text" name="key" id="key" <?php displayKey($key); ?>>

            <label for="data">Data</label>
            <textarea name="data" id="data"></textarea>

            <label for="result">Result</label>
            <textarea name="result" id="result"><?php echo $scrambler_data; ?></textarea>

            <button type="submit">Do it for me</button>
        </form>
    </div>
</div>
</body>

</html>