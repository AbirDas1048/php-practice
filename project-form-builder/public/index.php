<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Builder</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Abir\FormBuilder\classes\FormBuilder;
use Abir\FormBuilder\fields\TextField;

$form = new FormBuilder();
$form->addField(new TextField('username', 'Username'));

echo $form->render();
?>

</body>
</html>
