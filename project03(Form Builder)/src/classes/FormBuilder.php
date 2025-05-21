<?php

namespace Abir\FormBuilder\classes;

use Abir\FormBuilder\interfaces\FormFieldInterface;
use Abir\FormBuilder\traits\FieldAttributeTrait;

class FormBuilder
{
    use FieldAttributeTrait;
    private array $fields = [];
    protected string $method = 'POST';
    protected string $action = '';

    public function __construct(string $action = '', string $method = 'POST', array $attributes = [])
    {
        $this->action = $action;
        $this->method = strtoupper($method);
        $this->setAttributes($attributes);
    }

    public function addField(FormFieldInterface $field): void {
        $this->fields[] = $field;
    }

    public function render(): string {

        $form = sprintf('<form action="%s" method="%s"%s>', htmlspecialchars($this->action), htmlspecialchars($this->method), $this->renderAttributes());

        foreach ($this->fields as $field) {
            $form .= $field->render();
        }

        $form .= '</form>';
        return $form;
    }
}