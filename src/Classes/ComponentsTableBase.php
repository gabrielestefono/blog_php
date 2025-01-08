<?php

namespace App\Classes;

abstract class ComponentsTableBase extends ComponentsBase{
    public function getPath(): string {
        return __DIR__ . '/../Components/Pages/Admin/TableData/' . $this->normalizePath() . '.php';
    }
}
