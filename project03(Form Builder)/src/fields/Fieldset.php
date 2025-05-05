<?php

namespace Abir\FormBuilder\fields;

use Abir\FormBuilder\interfaces\FormFieldInterface;

class Fieldset implements FormFieldInterface
{
    protected ?string $legend;
    protected array $fields = [];

    public function __construct(?string $legend = null)
    {
        $this->legend = $legend;
    }

    public function addField(FormFieldInterface $field): void
    {
        $this->fields[] = $field;
    }

    public function render(): string
    {
        $output = '<fieldset>';

        if ($this->legend) {
            $output .= sprintf('<legend>%s</legend>', htmlspecialchars($this->legend));
        }

        foreach ($this->fields as $field) {
            $output .= $field->render();
        }

        $output .= '</fieldset>';

        return $output;
    }
}