<?php

namespace Abir\FormBuilder\fields;

use Abir\FormBuilder\interfaces\FormFieldInterface;
use Abir\FormBuilder\traits\FieldAttributeTrait;

class InputField implements FormFieldInterface
{
    use FieldAttributeTrait;

    protected string $type;
    protected string $name;
    protected string $label;

    public function __construct(string $type, string $name, string $label, array $attributes = [])
    {
        $this->type  = $type;
        $this->name  = $name;
        $this->label = $label;
        $this->setAttributes($attributes);
    }

    public function render(): string
    {
        return sprintf(
            '<label>%s</label><input type="%s" name="%s" %s>',
            htmlspecialchars($this->label),
            htmlspecialchars($this->type),
            htmlspecialchars($this->name),
            $this->renderAttributes()
        );
    }
}