<?php

namespace Abir\FormBuilder\traits;

use Abir\FormBuilder\config\Constants;

trait LabelHelperTrait
{
    protected function renderLabel(string $id, string $label = '', array $attributes = [], string $type = Constants::INPUT_TYPE_TEXT): string
    {
        if ($type === Constants::INPUT_TYPE_HIDDEN || !$label) {
            return ''; // No label for hidden or empty label
        }

        $requiredStar = (!empty($attributes['required'])) ? ' <span style="color:red">*</span>' : '';

        return sprintf(
            '<label for="%s">%s%s</label>',
            htmlspecialchars($id),
            htmlspecialchars($label),
            $requiredStar
        );
    }
}