<?php

namespace Abir\FormBuilder\fields;

use Abir\FormBuilder\interfaces\FormFieldInterface;
use Abir\FormBuilder\traits\FieldAttributeTrait;

class ButtonField implements FormFieldInterface
{
    use FieldAttributeTrait;

    protected string $label;
    protected string $type;
    public function __construct(string $type, string $label, array $attributes = []){
        $this->type = $type;
        $this->label = $label;
        $this->setAttributes($attributes);
    }

    public function render(): string
    {
        return sprintf(
            '<button type="%s"%s>%s</button>',
            htmlspecialchars($this->type),
            $this->renderAttributes(),
            htmlspecialchars($this->label)
        );
    }
}