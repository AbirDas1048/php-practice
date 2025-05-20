<?php

namespace Abir\FormBuilder\fields;

use Abir\FormBuilder\interfaces\FormFieldInterface;
use Abir\FormBuilder\traits\FieldAttributeTrait;
use Abir\FormBuilder\traits\LabelHelperTrait;

class SelectField implements FormFieldInterface
{
    use FieldAttributeTrait, LabelHelperTrait;

    protected string $label;
    protected string $id;
    protected string $name;
    protected array $options = [];
    protected array $selected = [];
    protected bool $isMultiple;

    public function __construct(string $id, string $name, string $label, array $options = [], array|string|null $selected = null, array $attributes = [], bool $isMultiple = false){
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
        $this->selected = is_array($selected) ? $selected : [$selected];
        $this->isMultiple = $isMultiple;
        $this->setAttributes($attributes);
    }

    public function render(): string
    {
        $labelHtml = $this->renderLabel($this->id, $this->label, $this->attributes);

        $nameAttr = $this->isMultiple ? $this->name . '[]' : $this->name;
        $multipleAttr = $this->isMultiple ? ' multiple' : '';

        $selectHtml = sprintf('<select name="%s" id="%s"%s%s>',
            htmlspecialchars($nameAttr),
            htmlspecialchars($this->id),
            $multipleAttr,
            $this->renderAttributes()
        );

        foreach ($this->options as $value => $text) {
            $isSelected = in_array($value, $this->selected) ? ' selected' : '';
            $selectHtml .= sprintf('<option value="%s"%s>%s</option>',
                htmlspecialchars($value),
                $isSelected,
                htmlspecialchars($text)
            );
        }

        $selectHtml .= '</select>';

        return sprintf('<div class="form-group">%s%s</div>', $labelHtml, $selectHtml);
    }
}