<?php

namespace App\Classes\Components\Form;

use App\Classes\Base\Components\Classes\ComponentsTableForm;

class FormInput extends ComponentsTableForm{
    public function component(): string
    {
        return 'Input.Input';
    }
}
