<?php

namespace App\Classes\Base\Components\Classes;

abstract class ComponentsTableForm extends ComponentsBase{
    public function getPath(): string {
        return __DIR__ . '/../../../../Components/Pages/Admin/TableForm/' . $this->normalizePath() . '.php';
    }
}
