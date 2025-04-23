<?php

namespace Abir\FormBuilder\fields;

use Abir\FormBuilder\interfaces\FormFieldInterface;
use Abir\FormBuilder\traits\FieldAttributeTrait;

class TextField implements FormFieldInterface
{
    use FieldAttributeTrait;

    private string $name;
    private string $label;
    private ?string $value;

    public function __construct(string $name, string $label, ?string $value = null, array $attributes = []) {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->setAttributes($attributes);
    }

    public function render(): string {
        $attr = $this->renderAttributes();
        $valueAttr = $this->value !== null ? " value=\"" . htmlspecialchars($this->value) . "\"" : '';
        return "<label for=\"{$this->name}\">{$this->label}</label>
                <input type=\"text\" name=\"{$this->name}\" id=\"{$this->name}\"{$valueAttr}{$attr}><br>";
    }
}