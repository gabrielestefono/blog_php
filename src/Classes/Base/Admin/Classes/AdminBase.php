<?php

namespace App\Classes\Base\Admin\Classes;

use App\Classes\Base\Admin\Traits\AbstractAdmin;
use App\Classes\Base\Admin\Traits\FakeAbstractAdmin;
use App\Classes\Base\Admin\Traits\GeneralAdmin;
use App\Classes\Base\Admin\Traits\OptionalAdmin;

abstract class AdminBase
{
    use AbstractAdmin, GeneralAdmin, OptionalAdmin, FakeAbstractAdmin;
}
