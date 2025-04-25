<?php
use Abir\FormBuilder\classes\FormBuilder;
use Abir\FormBuilder\fields\InputField;
use Abir\FormBuilder\config\Constants;

$form = new FormBuilder();
$form->addField(new InputField(Constants::INPUT_TYPE_TEXT, 'name', 'name', 'Name', ['class' => 'from-control', 'required' => true]));
echo $form->render();