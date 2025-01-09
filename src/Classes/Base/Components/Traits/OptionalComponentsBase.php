<?php

namespace App\Classes\Base\Components\Traits;

use App\Classes\Base\Components\Classes\ComponentsBase;
use App\Errors\NotDefinedException;

trait OptionalComponentsBase
{
    protected string $label = '';

    public function getLabel(): string
    {
        throw new NotDefinedException('Método getLabel não definido.');
    }

    public function setLabel(string $label)
    {
        throw new NotDefinedException('Método getLabel não definido.');
    }
}
