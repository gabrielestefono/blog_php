<?php

namespace App\Classes\Base\Components\Classes;

abstract class ComponentsTableBase extends ComponentsBase
{
    public string $label = '';

    public function getPath(): string
    {
        return __DIR__ . '/../../../../Components/Pages/Admin/TableData/' . $this->normalizePath() . '.php';
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }
}
