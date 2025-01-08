<?php

namespace App\Classes;

abstract class ComponentsTableBase extends ComponentsBase{
    public function render($data): string
    {
        return $data;
    }
}
