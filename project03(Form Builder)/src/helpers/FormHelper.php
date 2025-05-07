<?php

namespace Abir\FormBuilder\helpers;

use Abir\FormBuilder\config\Constants;

class FormHelper
{

    public static function inlineFields(): array
    {
        return [
            Constants::INPUT_TYPE_CHECKBOX,
            Constants::INPUT_TYPE_COLOR,
        ];
    }
    public static function isInlineField(string $type): bool
    {
        return in_array($type, self::inlineFields());
    }
}