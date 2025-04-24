<?php
use Abir\FormBuilder\classes\FormBuilder;
use Abir\FormBuilder\fields\TextField;
use Abir\FormBuilder\fields\InputField;
use Abir\FormBuilder\config\Constants;

$form = new FormBuilder();
$form->addField(new TextField('username', 'Username', 'abir_das', ['required' => false, 'disabled' => true, 'data-username' => 'abir', 'class' => 'form-control']));

$form->addField(new InputField(Constants::INPUT_TYPE_TEXT, 'name', 'name', 'Name', ['class' => 'from-control', 'required' => true]));
echo $form->render();