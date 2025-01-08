<?php

namespace App\Classes;

abstract class ComponentsBase{
    protected string $title;

    protected string $label;

    public static function make(string $title, string $label){
        $instance = new static();
        $instance->title = $title;
        $instance->label = $label;
        return $instance;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getLabel(){
        return $this->label;
    }

    abstract public function render($data): string;
}
