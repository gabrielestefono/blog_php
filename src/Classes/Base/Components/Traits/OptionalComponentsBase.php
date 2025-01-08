<?php

namespace App\Classes\Base\Components\Traits;

trait OptionalComponentsBase
{
    protected string $label = null;

    public function getLabel()
    {
        return $this->label;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
