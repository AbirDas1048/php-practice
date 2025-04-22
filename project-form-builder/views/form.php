<?php
use Abir\FormBuilder\classes\FormBuilder;
use Abir\FormBuilder\fields\TextField;

$form = new FormBuilder();
$form->addField(new TextField('username', 'Username', 'abir_das', ['required' => false, 'disabled' => true, 'data-username' => 'abir', 'class' => 'form-control']));

echo $form->render();