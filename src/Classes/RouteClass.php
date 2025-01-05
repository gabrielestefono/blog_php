<?php

namespace App\Classes;

use App\Routes\Routes;

/**
 * Classe helper de rotas
 * Essa classe é usada pra mostrar as rotas no menu lateral do admin
 */
class RouteClass{
    /**
     * Atributo que armazena a rota do objeto
     * @var string
     */
    public $route;

    /**
     * Atributo que armazena o nome da rota
     * @var string
     */
    public $name;

    /**
     * Atributo que armazena se a rota deve ser exibida no menu
     * @var bool
     */
    public $show;

    /**
     * Atributo que armazena a lista de slugs
     * @var array
     */
    private $slugList = [
        '{id}' => '/\d+/',
    ];

    /**
     * Método que desfaz a substituição de slugs na rota
     * @param string $route
     * @return string
     */
    private function undoSlugs($route){
        foreach ($this->slugList as $str => $regex){
            $routeActive = preg_replace($regex, $str, Routes::getActiveRoute());
            if ($routeActive === $route){
                return Routes::getActiveRoute();
            }
        }
        return $route;
    }

    /**
     * Método construtor da classe
     * @param string $route
     * @param string $name
     * @param bool $show
     */
    public function __construct($route, $name, $show){
        $this->route = $this->undoSlugs($route);
        $this->name = $name;
        $this->show = $show;
    }
}
