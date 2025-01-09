<?php

namespace App\Classes\Base\Components\Traits;

trait AbstractComponentsBase
{
    abstract public function getPath(): string;

    abstract public function component(): string;

    abstract public function setErrorCaseEmpty(): array;
}
