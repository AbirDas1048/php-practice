<?php

namespace Abir\FormBuilder\fields;

use Abir\FormBuilder\interfaces\FormFieldInterface;
use Abir\FormBuilder\traits\FieldAttributeTrait;
use Abir\FormBuilder\traits\LabelHelperTrait;

class InputField implements FormFieldInterface
{
    use FieldAttributeTrait, LabelHelperTrait;

    protected string $label;
    protected string $type;
    protected string $id;
    protected string $name;

    public function __construct(string $type, string $id, string $name, string $label, array $attributes = [])
    {
        $this->type = $type;
        $this->id  = $id;
        $this->name  = $name;
        $this->label = $label;
        $this->setAttributes($attributes);
    }

    public function render(): string
    {
        $labelHtml = $this->renderLabel($this->id, $this->label, $this->attributes, $this->type);

        $inputHtml = sprintf(
            '<input type="%s" id="%s" name="%s" %s>',
            htmlspecialchars($this->type),
            htmlspecialchars($this->id),
            htmlspecialchars($this->name),
            $this->renderAttributes()
        );
        return $labelHtml . $inputHtml;
    }
}