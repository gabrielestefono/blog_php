<?php

namespace App\Classes\Components\Form;

use App\Classes\Base\Components\Classes\ComponentsTableForm;

class FormInput extends ComponentsTableForm{
    public string $label = '';

    public string $placeholder = '';

    public string $name = '';

    public bool $halfSize = false;

    public string $value = '';

    public function component(): string
    {
        return 'Input.Input';
    }

    public function setErrorCaseEmpty(): array
    {
        return [
            'label' => $this->label,
            'placeholder' => $this->placeholder,
            'halfSize|nullable' => $this->halfSize,
            'value|nullable' => $this->value
        ];
    }

    public function setLabel(string $label): FormInput
    {
        $this->label = $label;
        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setPlaceholder(string $placeholder): FormInput
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }

    public function setName(string $name): FormInput
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setHalfSize(bool $halfSize): FormInput
    {
        $this->halfSize = $halfSize;
        return $this;
    }

    public function getHalfSize(): bool
    {
        return $this->halfSize;
    }

    public function setValue(string $value): FormInput
    {
        $this->value = $value;
        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
