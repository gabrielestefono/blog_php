<?php

namespace App\Classes\Components\Form;

use App\Classes\Base\Components\Classes\ComponentsTableForm;

class FormSelect extends ComponentsTableForm{

    public string $label;

    public array $options;

    public bool $multiple = false;

    public bool $halfSize = false;

    public string $value;
    
    public function component(): string{
        return 'Select.Select';
    }

    public function setErrorCaseEmpty(): array{
        return [
            'label' => $this->label,
            'options' => $this->options,
            'multiple|nullable' => $this->multiple,
            'halfSize|nullable' => $this->halfSize,
            'value' => $this->value,
        ];
    }

    public function setLabel(string $label): FormSelect {
        $this->label = $label;
        return $this;
    }

    public function getLabel(): string {
        return $this->label;
    }

    public function setOptions(array $options): FormSelect {
        $this->options = $options;
        return $this;
    }

    public function getOptions(): array {
        return $this->options;
    }

    public function setMultiple(bool $multiple): FormSelect {
        $this->multiple = $multiple;
        return $this;
    }

    public function getMultiple(): bool {
        return $this->multiple;
    }

    public function setHalfSize(bool $halfSize): FormSelect {
        $this->halfSize = $halfSize;
        return $this;
    }

    public function getHalfSize(): bool {
        return $this->halfSize;
    }

    public function setValue(string $value): FormSelect {
        $this->value = $value;
        return $this;
    }

    public function getValue(): string {
        return $this->value;
    }
}
