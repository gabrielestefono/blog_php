<?php

namespace App\Classes\Components\Form;

use App\Classes\Base\Components\Classes\ComponentsTableForm;

class FormTextarea extends ComponentsTableForm
{
    public string $label = '';

    public string $placeholder = '';

    public bool $halfSize = false;

    public string $value = '';

    public function setErrorCaseEmpty(): array
    {
        return [
            'label' => $this->label,
            'placeholder' => $this->placeholder,
            'halfSize|nullable' => $this->halfSize,
            'value|nullable' => $this->value
        ];
    }

    public function component(): string {
        return "Textarea.Textarea";
    }

    public function setLabel(string $label): FormTextarea
    {
        $this->label = $label;
        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setPlaceholder(string $placeholder): FormTextarea
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }

    public function setHalfSize(bool $halfSize): FormTextarea
    {
        $this->halfSize = $halfSize;
        return $this;
    }

    public function getHalfSize(): bool
    {
        return $this->halfSize;
    }

    public function setValue(string $value): FormTextarea
    {
        $this->value = $value;
        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
