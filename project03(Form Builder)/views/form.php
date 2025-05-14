<?php
use Abir\FormBuilder\classes\FormBuilder;
use Abir\FormBuilder\fields\InputField;
use Abir\FormBuilder\fields\Fieldset;
use Abir\FormBuilder\fields\ButtonField;
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
$form->addField(new InputField(
    Constants::INPUT_TYPE_URL, 'website', 'website', 'Website',
    ['class' => 'from-control', 'title' => 'Enter your website', 'pattern' => "https://.*"]
));
$form->addField(new InputField(
    Constants::INPUT_TYPE_TEL, 'telno', 'telno', 'Phone no',
    ['class' => 'from-control', 'placeholder' => '01XXX-XXXXXX', 'pattern' => "[0-9]{5}-[0-9]{6}"]
));
$form->addField(new InputField(
    Constants::INPUT_TYPE_COLOR, 'fav_color', 'fav_color', 'Pick a color',
    ['class' => 'from-control', 'value' => "#e66465"]
));

$favFieldset = new Fieldset('Choose Favorite Thing');
$favFieldset->addField(new InputField(Constants::INPUT_TYPE_CHECKBOX, 'fav_coding', 'fav', 'Coding', ['checked' => true]));
$favFieldset->addField(new InputField(Constants::INPUT_TYPE_CHECKBOX, 'fav_traveling', 'fav', 'Traveling', ['checked' => true]));
$favFieldset->addField(new InputField(Constants::INPUT_TYPE_CHECKBOX, 'fav_sleeping', 'fav', 'Sleeping', []));
$favFieldset->addField(new InputField(Constants::INPUT_TYPE_CHECKBOX, 'fav_eating', 'fav', 'Eating', []));
$favFieldset->addField(new InputField(Constants::INPUT_TYPE_CHECKBOX, 'fav_gaming', 'fav', 'Gaming', []));

$form->addField($favFieldset);

$genderFieldset = new Fieldset('Choose Gender');
$genderFieldset->addField(new InputField(Constants::INPUT_TYPE_RADIO, 'gen_male', 'gender', 'Male', ['checked' => true]));
$genderFieldset->addField(new InputField(Constants::INPUT_TYPE_RADIO, 'gen_female', 'gender', 'Female', []));
$genderFieldset->addField(new InputField(Constants::INPUT_TYPE_RADIO, 'gen_other', 'gender', 'Other', []));

$form->addField($genderFieldset);

$form->addField(new InputField(
    Constants::INPUT_TYPE_FILE, 'avatar', 'avatar', 'Choose an image',
    ['class' => 'from-control', 'accept' => 'image/*']
));

$form->addField(new InputField(
    Constants::INPUT_TYPE_RANGE, 'points', 'points', 'Choose points',
    ['class' => 'from-control', 'min' => 0, 'max' => 20, 'step' => 2, 'value' => 10]
));

$form->addField(new ButtonField(Constants::BUTTON_TYPE_BUTTON, 'Click Me', ['onclick' => 'alert("clicked!")']));


echo $form->render();