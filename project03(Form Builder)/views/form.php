<?php
use Abir\FormBuilder\classes\FormBuilder;
use Abir\FormBuilder\fields\InputField;
use Abir\FormBuilder\config\Constants;

$form = new FormBuilder();
$form->addField(new InputField(
    Constants::INPUT_TYPE_TEXT, 'full_name', 'full_name', 'Full Name',
    ['class' => 'from-control', 'required' => true, 'placeholder' => 'Full Name']
));
$form->addField(new InputField(
    Constants::INPUT_TYPE_TEXT, 'username', 'username', 'Username',
    ['class' => 'from-control', 'required' => true]
));
$form->addField(new InputField(
    Constants::INPUT_TYPE_EMAIL, 'email', 'email', 'Email',
    ['class' => 'from-control', 'value' => 'name@email.com', 'readonly' => true]
));
$form->addField(new InputField(
    Constants::INPUT_TYPE_PASSWORD, 'password', 'password', 'Password',
    ['class' => 'from-control', 'required' => true]
));
$form->addField(new InputField(
    Constants::INPUT_TYPE_NUMBER, 'salary', 'salary', 'Salary',
    ['class' => 'from-control', 'min' => 0, 'max' => 10000000]
));
$form->addField(new InputField(
    Constants::INPUT_TYPE_HIDDEN, 'id', 'id', '', ['required' => true]
));
$form->addField(new InputField(
    Constants::INPUT_TYPE_DATE, 'dob', 'dob', 'Date of Birth', ['class' => 'from-control']
));
$form->addField(new InputField(
    Constants::INPUT_TYPE_TIME, 'dob_time', 'dob_time', 'Time of Birth', ['class' => 'from-control']
));
$form->addField(new InputField(
    Constants::INPUT_TYPE_DATETIME, 'current_date_time', 'current_date_time', 'Current Date and Time',
    ['class' => 'from-control', 'value' => '2025-04-30T19:30']
));
echo $form->render();