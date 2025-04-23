<?php
use Abir\FormBuilder\classes\FormBuilder;
use Abir\FormBuilder\fields\TextField;

$form = new FormBuilder();
$form->addField(new TextField('username', 'Username', 'abir_das', ['required' => false, 'disabled' => true, 'data-username' => 'abir', 'class' => 'form-control']));

$form->addField(new \Abir\FormBuilder\fields\InputField(\Abir\FormBuilder\config\Constants::INPUT_TYPE_TEXT, 'name', 'Name', ['class' => 'from-control', 'required' => true]));
echo $form->render();