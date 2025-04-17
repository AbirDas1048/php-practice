<?php

namespace Abir\FormBuilder\fields;

use Abir\FormBuilder\interfaces\FormFieldInterface;

class TextField implements FormFieldInterface
{
    private string $name;
    private string $label;

    public function __construct(string $name, string $label) {
        $this->name = $name;
        $this->label = $label;
    }

    public function render(): string {
        return "<label>{$this->label}</label><input type='text' name='{$this->name}'><br>";
    }
}