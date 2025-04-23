<?php

namespace Abir\FormBuilder\traits;

trait FieldAttributeTrait
{
    protected array $attributes = [];

    public function setAttributes(array $attributes): void {
        $this->attributes = $attributes;
    }

    protected function renderAttributes(): string {
        $html = '';
        foreach ($this->attributes as $key => $value) {
            if (is_bool($value)) {
                if ($value) $html .= " {$key}";
            } else {
                $html .= " {$key}=\"" . htmlspecialchars($value) . "\"";
            }
        }
        return $html;
    }
}