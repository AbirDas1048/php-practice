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
    protected ?string $selected = null;
    public function __construct(string $id, string $name, string $label, array $options = [], string|null $selected = null, array $attributes = []){
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
        $this->selected = $selected;
        $this->setAttributes($attributes);
    }

    public function render(): string
    {
        $labelHtml = $this->renderLabel($this->id, $this->label, $this->attributes);

        $selectHtml = sprintf('<select name="%s" id="%s"%s>',
            htmlspecialchars($this->name),
            htmlspecialchars($this->id),
            $this->renderAttributes()
        );

        foreach ($this->options as $value => $text) {
            $isSelected = ($value == $this->selected) ? ' selected' : '';
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