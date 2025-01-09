<?php

namespace App\Classes\Base\Components\Traits;

use App\Errors\NotDefinedException;
use App\Errors\ViewNotFoundException;

trait GeneralComponentsBase
{
    protected string $column = '';

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
        $data = array_merge($this->setError(), $data, ['column' => $this->column]);
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

    public function setError(): array
    {
        $array = $this->setErrorCaseEmpty();
        foreach ($array as $key => $value) {
            if (strpos($key, '|nullable') === false && (!isset($value) || empty($value))) {
                throw new NotDefinedException("O campo $key não foi definido");
            }
        }

        $newKey = str_replace('|nullable', '', $key);
        
        if ($newKey !== $key) {
            $array[$newKey] = $array[$key];
            unset($array[$key]);
        }

        return $array;
    }

    public function getCreateData(): array
    {
        return [
            'column' => $this->column,
            'label' => $this->label
        ];
    }
}
