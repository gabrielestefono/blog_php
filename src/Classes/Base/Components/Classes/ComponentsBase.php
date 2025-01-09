<?php

namespace App\Classes\Base\Components\Classes;

use App\Classes\Base\Components\Traits\GeneralComponentsBase;
use App\Classes\Base\Components\Traits\AbstractComponentsBase;
use App\Classes\Base\Components\Traits\OptionalComponentsBase;

abstract class ComponentsBase
{
    use AbstractComponentsBase, GeneralComponentsBase, OptionalComponentsBase;
}
