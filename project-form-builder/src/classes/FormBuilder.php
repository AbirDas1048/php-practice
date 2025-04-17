<?php

namespace Abir\FormBuilder\classes;

use Abir\FormBuilder\interfaces\FormFieldInterface;

class FormBuilder
{
    private array $fields = [];
    public function addField(FormFieldInterface $field): void {
        $this->fields[] = $field;
    }

    public function render(): string {
        $form = "<form method='POST'>";
        foreach ($this->fields as $field) {
            $form .= $field->render();
        }
        $form .= "<button type='submit'>Submit</button></form>";
        return $form;
    }
}