<?php

namespace App\Classes;

use App\Errors\ViewNotFoundException;

abstract class ComponentsBase{
    /**
     * Título da tabela no banco de dados
     * @var string
     */
    protected string $title;

    /**
     * Título da coluna a ser exibido
     * @var string
     */
    protected string $label;

    /**
     * Cria uma instância da classe a partir dos parâmetros
     * @param string $title título da tabela no banco de dados
     * @param string $label título da coluna a ser exibido
     * @return \App\Classes\ComponentsBase
     */
    public static function make(string $title, string $label): ComponentsBase {
        $instance = new static();
        $instance->title = $title;
        $instance->label = $label;
        return $instance;
    }

    /**
     * Retorna o título da tabela no banco de dados
     * @return string título da tabela no banco de dados
     */
    public function getTitle(){
        return $this->title;
    }

    /**
     * Retorna o título da coluna a ser exibido
     * @return string
     */
    public function getLabel(){
        return $this->label;
    }

    public function render(string $data): string
    {
        $path = $this->getPath();
        if (!file_exists($path)) {
            throw new ViewNotFoundException("Arquivo não encontrado: $path");
        }
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
    
    abstract public function getPath(): string;

    abstract public function component(): string;
}
