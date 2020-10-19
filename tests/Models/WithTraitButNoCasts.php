<?php

namespace codicastudio\Enum\Tests\Models;

use codicastudio\Enum\Traits\CastsEnums;
use Illuminate\Database\Eloquent\Model;

class WithTraitButNoCasts extends Model
{
    use CastsEnums;
}
