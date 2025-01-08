<?php

use App\Errors\ViewNotFoundException;

trait GeneralComponentsBase
{
    protected string $column = null;
    
    public static function make(string $column)
    {
        $instance = new static();
        $instance->column = $column;
        return $instance;
    }

    public function getColumn()
    {
        return $this->column;
    }

    public function render(array $data): string
    {
        $path = $this->getPath();
        if (!file_exists($path)) {
            throw new ViewNotFoundException("Arquivo não encontrado: $path");
        }
        extract($data);
        ob_start();
        include $path; // NOSONAR
        return ob_get_clean();
    }


    public function normalizePath(): string
    {
        $path = $this->component();
        $path = str_replace('.', '/', $path);
        return $path;
    }
}
