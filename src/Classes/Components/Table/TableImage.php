<?php

namespace App\Classes\Components\Table;

use App\Classes\Base\Components\Classes\ComponentsTableBase;

class TableImage extends ComponentsTableBase{
    public function component(): string
    {
        return 'TableImage.TableImage';
    }

    public function setErrorCaseEmpty(): array
    {
        return [
            'label' => $this->label,
        ];
    }
}
