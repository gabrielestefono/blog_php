<?php

namespace App\Classes;

use App\Routes\Routes;

class RouteClass{
    public $route;

    public $name;

    public $show;

    private $slugList = [
        '{id}' => '/\d+/',
    ];

    private function undoSlugs($route){
        foreach ($this->slugList as $str => $regex){
            $routeActive = preg_replace($regex, $str, Routes::getActiveRoute());
            if ($routeActive === $route){
                return Routes::getActiveRoute();
            }
        }
        return $route;
    }

    public function __construct($route, $name, $show){
        $this->route = $this->undoSlugs($route);
        $this->name = $name;
        $this->show = $show;
    }
}
