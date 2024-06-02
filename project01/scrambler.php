<?php
$mode = 'encode';
$key = 'abcdefghijklmnopqrstuvwxyz1234567890';
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
                <a href="/?task=encode">Encode</a> |
                <a href="/?task=decode">Decode</a> |
                <a href="/?task=decode">Generate Key</a>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
        <form action="" method="GET">
            <label for="key">key</label>
            <input type="text" name="key" id="key">

            <label for="data">Data</label>
            <textarea name="data" id="data"></textarea>

            <label for="result">Result</label>
            <textarea name="result" id="result"></textarea>

            <button type="submit">Do it for me</button>
        </form>
    </div>
</div>
</body>

</html>